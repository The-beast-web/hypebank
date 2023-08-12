<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\ServiceRevenue;
use App\Models\Transaction;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    //
    public function view()
    {
        $bank = Bank::all()->sortBy('name');
        return view('customer.transfer.index', compact('bank'));
    }

    public function success()
    {
        return view('customer.transfer.success');
    }

    public function process(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'bank' => 'required',
            'account_number' => 'required|integer',
            'account_name' => 'required|string',
            'transaction_pin' => 'required|digits:4'
        ];

        $validated = $request->validate($rules);

        $transfer = new Transfer();
        $user = Auth::user();
        $transfer->user_id = $user->id;
        $transfer->amount = $validated['amount'];
        $transfer->rec_account_number = $validated['account_number'];
        $transfer->rec_account_name = $validated['account_name'];
        $transfer->rec_bank = $validated['bank'];

        $service = new ServiceRevenue();
        $service->amount = $validated['amount']/100 * 10;
        $service->save();

        if ($user->transaction_pin == $validated['transaction_pin']) {
            $transaction = new Transaction();
            $transaction->user_id = Auth::id();
            $transaction->amount = $validated['amount'];
            $transaction->transaction_type = "Transfer";
            $transaction->transfer_recipient_account_no = $validated['account_number'];
            $transaction->transfer_recipient_name = $validated['account_name'];
            $transaction->transfer_recipient_bank = $validated['bank'];

            $transfer->tran_id = $transaction->id;
            $transfer->save();

            $transaction->status = 'successful';
            $transaction->save();

            $user->balance = $user->balance - $transfer->amount - $service->amount;
            $user->save();

            return redirect()->route('customer.transfer.success');
        } else {
            return redirect()->back()->with('error', 'Invalid Transaction PIN');
        }
    }
}
