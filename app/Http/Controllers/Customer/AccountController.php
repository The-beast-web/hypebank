<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Proengsoft\JsValidation\Facades\JsValidatorFacade;

class AccountController extends Controller
{

    protected $validationRules = [
        'name' => '',
        'phone' => '',
        'dob' => ''
    ];

    public function view()
    {

        $validator = JsValidatorFacade::make($this->validationRules);

        $user = Auth::user();

        return view('customer.settings.index', compact('user', 'validator'));
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
}
