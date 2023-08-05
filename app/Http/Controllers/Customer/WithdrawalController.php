<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\BankWithdrawal;
use App\Models\PaypalWithdrawal;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\Admin\Withdrawal\Withdrawal as WithdrawalWithdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class WithdrawalController extends Controller
{
    //
    public function viewMethods()
    {
        return view('customer.withdrawal.withdrawal-method');
    }

    public function viewSuccess()
    {
        request()->session()->forget('success');
        return view('customer.withdrawal.withdrawal-success');
    }

    public function viewBankMethod()
    {
        $bank = Bank::all();
        return view('customer.withdrawal.bank-withdrawal.index', compact('bank'));
    }

    public function processBankMethod(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'bank' => 'required',
            'account_number' => 'required|digits:10',
            'account_name' => 'required',
            'account_type' => 'required',
            'transaction_pin' => 'required|digits:4'
        ];

        $validated = $request->validate($rules);

        $user = Auth::user();

        if ($user->transaction_pin == $validated['transaction_pin']) {
            $bankwithdrawal = new BankWithdrawal();
            $bankwithdrawal->user_id = Auth::id();
            $bankwithdrawal->amount = $validated['amount'];
            $bankwithdrawal->account_no = $validated['account_number'];
            $bankwithdrawal->account_name = $validated['account_name'];
            $bankwithdrawal->bank = $validated['bank'];
            $bankwithdrawal->account_type = $validated['account_type'];
            $bankwithdrawal->save();

            $request->session()->put('amount', $validated['amount']);

            $transaction = new Transaction();
            $transaction->user_id = Auth::id();
            $transaction->amount = $validated['amount'];
            $transaction->transaction_type = "Withdrawal";
            $transaction->status = 'pending';
            $transaction->save();

            $withdrawal = new Withdrawal();
            $withdrawal->user_id = Auth::id();
            $withdrawal->tran_id = $transaction->id;
            $withdrawal->kyc_id = User::find(Auth::id())->kyc->id;
            $withdrawal->amount = $validated['amount'];
            $withdrawal->withdrawal_method = "bank transfer";
            $withdrawal->bank_withdraw_id = $bankwithdrawal->id;
            $withdrawal->status = "pending";
            $withdrawal->status_2 = "active";
            $withdrawal->save();

            Notification::send(User::find(6), new WithdrawalWithdrawal($withdrawal));

            return redirect()->route('customer.withdraw.success')
            ->with([
                'amount' => $validated['amount'],
                'restrict' => 'true',
            ]);
        } else {
            return redirect()->back()->with('error', 'Incorrect Transaction PIN');
        }
    }

    public function viewPaypalMethod()
    {
        $bank = Bank::all();
        return view('customer.withdrawal.paypal-withdrawal.index', compact('bank'));
    }

    public function processPaypalMethod(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'paypal_id' => 'required|email',
            'paypal_username' => 'required',
            'transaction_pin' => 'required|digits:4'
        ];

        $validated = $request->validate($rules);

        $user = Auth::user();

        if ($user->transaction_pin == $validated['transaction_pin']) {
            $paypalwithdrawal = new PaypalWithdrawal();
            $paypalwithdrawal->user_id = Auth::id();
            $paypalwithdrawal->amount = $validated['amount'];
            $paypalwithdrawal->paypal_id = $validated['paypal_id'];
            $paypalwithdrawal->paypal_username = $validated['paypal_username'];
            $paypalwithdrawal->save();

            $request->session()->put('amount', $validated['amount']);

            $transaction = new Transaction();
            $transaction->user_id = Auth::id();
            $transaction->amount = $validated['amount'];
            $transaction->transaction_type = "Withdrawal";
            $transaction->status = 'pending';
            $transaction->save();

            $withdrawal = new Withdrawal();
            $withdrawal->user_id = Auth::id();
            $withdrawal->tran_id = $transaction->id;
            $withdrawal->kyc_id = User::find(Auth::id())->kyc->id;
            $withdrawal->amount = $validated['amount'];
            $withdrawal->withdrawal_method = "paypal";
            $withdrawal->paypal_withdraw_id = $paypalwithdrawal->id;
            $withdrawal->status = "pending";
            $withdrawal->status_2 = "active";
            $withdrawal->save();

            Notification::send(User::find(6), new WithdrawalWithdrawal($withdrawal));

            return redirect()->route('customer.withdraw.success')
            ->with([
                'amount' => $validated['amount'],
                'restrict' => 'true',
            ]);
        } else {
            return redirect()->back()->with('error', 'Incorrect Transaction PIN');
        }
    }
}
