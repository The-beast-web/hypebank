<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Bankdeposit;
use App\Models\Bitcoin;
use App\Models\Deposit;
use App\Models\Kyc;
use App\Models\Paypal;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DepositController extends Controller
{
    // DEPOSIT METHODS
    public function view()
    {

        return view('customer.deposit.deposit-method');
    }

    public function depositSuccess()
    {
        return view('customer.deposit.deposit-success');
    }

    //BANK DEPOSIT METHODS
    public function bankView()
    {

        return view('customer.deposit.bank-transfer.bank-method');
    }

    public function bankDeposit()
    {
        $bank = Bank::all()->sortBy('name');
        return view('customer.deposit.bank-transfer.bank-form', compact('bank'));
    }

    public function bankDepositProcess(Request $request)
    {
        $rules = [
            'amount' => 'required|numeric',
            'account_number' => 'required|digits:10',
            'account_name' => 'required',
            'account_type' => 'required',
            'bank' => 'required',
            'proof' => 'required'

        ];

        $messages = [
            'amount.required' => 'Enter the amount deposited',
            'account_number' => [
                'required' => 'Enter your account number',
                'digits' => 'Your account number is invalid'
            ],
            'account_name.required' => 'Enter your account name',
            'account_type.required' => 'Select your account type',
            'bank.required' => 'Select your bank',
            'proof' => 'Upload payment slip'
        ];
        $validated = $request->validate($rules, $messages);

        $bank = new Bankdeposit();
        $bank->user_id = Auth::id();
        $bank->amount = $validated['amount'];
        $bank->account_number = $validated['account_number'];
        $bank->account_name = $validated['account_name'];
        $bank->account_type = $validated['account_type'];
        $bank->bank = $validated['bank'];


        if (request()->has('proof')) {
            $path = Storage::disk('mydisk')->put('deposit-proof', request()->file('proof'));

            $bank->proof = $path;
        }
        $bank->save();

        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $validated['amount'];
        $transaction->transaction_type = "Deposit";
        $transaction->status = 'pending';
        $transaction->save();

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->tran_id = $transaction->id;
        $deposit->bank_deposit_id = $bank->id;
        $deposit->kyc_id = User::find(Auth::id())->kyc->id;
        $deposit->amount = $validated['amount'];
        $deposit->payment_method = "Bank Transfer";
        $deposit->status = "pending";
        $deposit->save();

        return redirect()->route('deposit.success')
        ->with([
            'amount' => $validated['amount'],
            'restrict' => 'true',
        ]);
    }
    // END OF BANK DEPOSIT METHODS

    //PAYPAL DEPOSIT METHODS
    public function paypalView()
    {

        return view('customer.deposit.paypal.paypal-method');
    }

    public function paypalDeposit()
    {
        return view('customer.deposit.paypal.paypal-form');
    }

    public function paypalDepositProcess(Request $request)
    {
        $rules = [
            'amount' => 'required|numeric',
            'paypal_id' => 'required|email',
            'paypal_name' => 'required',
            'proof' => 'required'

        ];

        $messages = [
            'amount.required' => 'Enter the deposited amount',
            'paypal_id' => [
                'required' => 'Enter your Paypal ID',
                'email' => 'Invalid Paypal ID'
            ],
            'paypal_name.required' => 'Enter your Paypal Username',
            'proof.required' => 'Upload the proof of payment'
        ];


        $validated = $request->validate($rules, $messages);

        $paypal = new Paypal();
        $paypal->user_id = Auth::id();
        $paypal->amount = $validated['amount'];
        $paypal->paypal_id = $validated['paypal_id'];
        $paypal->paypal_name = $validated['paypal_name'];

        if (request()->has('proof')) {
            $path = Storage::disk('mydisk')->put('deposit-proof', request()->file('proof'));

            $paypal->proof = $path;
        }
        $paypal->save();

        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $validated['amount'];
        $transaction->transaction_type = "Deposit";
        $transaction->status = 'pending';
        $transaction->save();

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->tran_id = $transaction->id;
        $deposit->kyc_id = User::find(Auth::id())->kyc->id;
        $deposit->paypal_deposit_id = $paypal->id;
        $deposit->amount = $validated['amount'];
        $deposit->payment_method = "Paypal";
        $deposit->status = "pending";
        $deposit->save();



        $request->session()->put('amount', $validated['amount']);
        $request->session()->put('success', 'yes!');

        return redirect()->route('deposit.success');
    }
    // END OF PAYPAL DEPOSIT METHODS

    //BITCOIN DEPOSIT METHODS
    public function bitcoinView()
    {

        return view('customer.deposit.bitcoin.bitcoin-method');
    }

    public function bitcoinDeposit()
    {
        return view('customer.deposit.bitcoin.bitcoin-form');
    }

    public function bitcoinDepositProcess(Request $request)
    {
        $rules = [
            'amount' => 'required|numeric',
            'wallet_address' => 'required',
            'wallet_name' => 'required',
            'proof' => 'required'

        ];

        $messages = [
            'amount.required' => 'Enter the deposited amount',
            'wallet_address.required' => 'Enter your bitcoin wallet address',
            'wallet_name.required' => 'Enter your bitcoin wallet name',
            'proof.required' => 'Upload the proof of payment'
        ];


        $validated = $request->validate($rules, $messages);

        $bitcoin = new Bitcoin();
        $bitcoin->user_id = Auth::id();
        $bitcoin->amount = $validated['amount'];
        $bitcoin->wallet_address = $validated['wallet_address'];
        $bitcoin->wallet_name = $validated['wallet_name'];

        if (request()->has('proof')) {
            $path = Storage::disk('mydisk')->put('deposit-proof', request()->file('proof'));

            $bitcoin->proof = $path;
        }
        $bitcoin->save();


        $transaction = new Transaction();
        $transaction->user_id = Auth::id();
        $transaction->amount = $validated['amount'];
        $transaction->transaction_type = "Deposit";
        $transaction->status = 'pending';
        $transaction->save();

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->tran_id = $transaction->id;
        $deposit->kyc_id = User::find(Auth::id())->kyc->id;
        $deposit->bitcoin_deposit_id = $bitcoin->id;
        $deposit->amount = $validated['amount'];
        $deposit->payment_method = "Bitcoin";
        $deposit->status = "pending";
        $deposit->save();


        $request->session()->put('amount', $validated['amount']);
        $request->session()->put('success', 'yes!');

        return redirect()->route('deposit.success');
    }
    // END OF BITCOIN DEPOSIT METHODS
}
