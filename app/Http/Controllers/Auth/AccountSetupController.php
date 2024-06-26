<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountSetupController extends Controller
{
    //
    public function viewSetup()
    {
        return view('customer.kyc.setup');
    }
    public function viewApp()
    {
        return view('customer.kyc.kyc');
    }

    public function pending()
    {
        return view('customer.kyc.pending');
    }

    public function setup(Request $request)
    {
        // dd($request->all());
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'state' => 'required',
            'nationality' => 'required',
            'address1' => 'required',
            'zipcode' => 'required',
            'id-proof' => 'required',
            'id_front' => 'required',
            'id_back' => 'required'
        ];

        $validated = $request->validate($rules);

        $kyc = new Kyc();
        $kyc->user_id = Auth::id();
        $kyc->first_name = $validated['first_name'];
        $kyc->last_name = $validated['last_name'];
        $kyc->email = $validated['email'];
        $kyc->phone = $validated['phone'];
        $kyc->dob = $validated['dob'];
        $kyc->city = $validated['city'];
        $kyc->state = $validated['state'];
        $kyc->country = $validated['nationality'];
        $kyc->address1 = $validated['address1'];
        $kyc->zipcode = $validated['zipcode'];
        $kyc->id_type = $validated['id-proof'];
        $kyc->status = 'pending';

        if ($request->has('address2')) {
            $kyc->address2 = $request->get('address2');
        }

        if ($request->hasFile('id_front')) {
            $path = Storage::disk('mydisk')->put('Proof', $request->file('id_front'));
            $kyc->id_front = $path;
        }

        if ($request->hasFile('id_back')) {
            $path = Storage::disk('mydisk')->put('Proof', $request->file('id_back'));
            $kyc->id_back = $path;
        }
        $kyc->save();

        $user = User::where('id', Auth::id())->first();
        $user->setup = "pending";
        $user->save();

        return redirect()->route('customer.dashboard');
    }
}
