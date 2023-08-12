<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;

class AccountController extends Controller
{

    protected $validationRules = [
        'name' => 'required',
        'phone' => 'required',
        'dob' => 'required'
    ];

    protected $validationAddress = [
        'address-l1' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zipcode' => 'required',
        'country' => 'required'
    ];

    protected $validationAddressMessage = [
        'address-l1.required' => 'Address Line 1 is required',
    ];

    public function view()
    {

        $validator = JsValidatorFacade::make($this->validationRules, $this->validationAddress);

        $user = Auth::user();

        return view('customer.settings.index', compact(['user', 'validator']));
    }

    public function process(Request $request)
    {


        $validated = Validator::make($request->all(), $this->validationRules);

        if ($validated->fails()) {
            return Response::json(
                array(
                    'status' => false,
                    'errors' => $validated->getMessageBag()->toArray()
                ),
                400
                //400 being the HTTP code for an invalid request.
            );
        }

        if ($validated->passes()) {
            $user = Auth::user();
            $user->name = request('name');
            $user->kyc->phone = request('phone');
            $user->kyc->dob = request('dob');
            $user->save();
            $user->kyc->save();

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.setting')
            ], 200);
        }
    }

    public function address_process(Request $request)
    {


        $validated = Validator::make($request->all(), $this->validationAddress, $this->validationAddressMessage);

        if ($validated->fails()) {
            return Response::json(
                array(
                    'status' => false,
                    'errors' => $validated->getMessageBag()->toArray()
                ),
                400
                //400 being the HTTP code for an invalid request.
            );
        }

        if ($validated->passes()) {
            $user = Auth::user();
            $user->kyc->address1 = request('address-l1');
            $user->kyc->address2 = request('address-l2');
            $user->kyc->zipcode = request('zipcode');
            $user->kyc->city = request('city');
            $user->kyc->state = request('state');
            $user->kyc->country = request('country');
            $user->save();
            $user->kyc->save();

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.setting')
            ], 200);
        }
    }

    public function security(Request $request)
    {

        $rules = [
            'old-password' => ['sometimes', 'nullable', function ($field, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Incorrect Password');
                }
            }],
            'new-password' => ['nullable', 'min:8', function ($field, $value, $fail) {
                if (!is_null(request('old-password')) && is_null($value)) {
                    $fail('Your New Password is required');
                }
            }],
            'old-pin' => ['sometimes', 'nullable', function ($field, $value, $fail) {
                if ($value != Auth::user()->transaction_pin) {
                    $fail('Incorrect Transaction PIN');
                }
            }],
            'new-pin' => ['nullable', 'digits:4', function ($field, $value, $fail) {
                if (!is_null(request('old-pin')) && is_null($value)) {
                    $fail('Your New Transaction PIN is required');
                }
            }]
        ];


        $validated = Validator::make($request->all(), $rules);


        if ($validated->fails()) {
            return Response::json(
                array(
                    'status' => false,
                    'errors' => $validated->getMessageBag()->toArray()
                ),
                400
                //400 being the HTTP code for an invalid request.
            );
        }

        if ($validated->passes()) {
            $user = Auth::user();
            if (request()->has('new-password')) {
                $user->password = Hash::make(request('new-password'));
            }
            if (request()->has('new-pin')) {
                $user->transaction_pin = request('transaction_pin');
            }
            $user->save();

            return Response::json([
                'status' => true,
                'redirect_url' => route('customer.setting')
            ], 200);
        }
    }
}
