<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    //
    public function view(){
        return view('admin.settings.index');
    }

    public function updateGeneral(){

       // dd(request()->all());

        $rules = [
            'app_name' => 'required',
        ];

        $validated = request()->validate($rules);

        if (request()->has('app_logo')) {
            $path = Storage::disk('mydisk')->put('settings', request()->file('app_logo'));
            $validated['app_logo'] = $path;
        }
        if (request()->has('app_favicon')) {
            $path = Storage::disk('mydisk')->put('settings', request()->file('app_favicon'));
            $validated['app_favicon'] = $path;
        }

        

        setting($validated)->save();

        return redirect()->back()->with('success', 'Settings was update successfully');
        
    }

    public function viewPaymentGateWay(){
        return view('admin.settings.payment-gateway');
    }

    public function processPaymentGateway(){

        $rules = [
            'paystack_public_key' => 'required',
            'paystack_secret_key' => 'required',
            'stripe_key' => 'required',
            'stripe_secret' => 'required',
            'flutterwave_public_key' => 'required',
            'flutterwave_secret_key' => 'required',
            'flutterwave_secret_hash' => 'required',
            'paypal_client_id' => 'required',
            'paypal_secret' => 'required',
            'paypal_app_id' => 'required'
        ];

        $validated = request()->validate($rules);

        setting($validated)->save();
        
    }
}
