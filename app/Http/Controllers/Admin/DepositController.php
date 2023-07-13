<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bankdeposit;
use App\Models\Bitcoin;
use App\Models\Deposit;
use App\Models\Kyc;
use App\Models\Paypal;
use App\Models\Transaction;
use App\Models\User;
use App\Notifications\DepositApproval;
use App\Notifications\DepositApprovalCancelled;
use App\Notifications\DepositDeclined;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    // Main deposit list
    public function index()
    {
        $trash = Deposit::where('status_2', 'trash')->get()->sortByDesc('id');
        $deposits = Deposit::where('status_2', 'active')->get()->sortByDesc('id');
        return view('admin.transactions.deposit.deposit', compact(['deposits', 'trash']));
    }

    // Trash deposit list
    public function viewTrash()
    {
        $deposits = Deposit::where('status_2', 'trash')->get()->sortByDesc('id');
        return view('admin.transactions.deposit.deposit-trash', compact('deposits'));
    }

    // Restore trash to main list
    public function trashRestore($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status_2 = 'active';
        $deposit->save();
        return redirect()->back()->with('success', 'Trash Restored Successfully');
    }

    // Permanently delete trash for admin only
    public function deleteTrashForAdmin($id)
    {
        $deposit = Deposit::find($id);
        $deposit->delete();
        return redirect()->back()->with('danger', 'Trash Permanently Deleted for Admin');
    }

    // Permanently delete trash for admin and user
    public function deleteTrashForAll($id)
    {
        $deposit = Deposit::find($id);

        // get user transaction to delete - from transactions table
        $transaction = Transaction::find($deposit->tran_id);
        $transaction->delete();
        //@e

        $deposit->delete(); // delete from main deposit table
        return redirect()->back()->with('danger', 'Trash Permanently Deleted for Admin & User');
    }

    // view each deposit full details
    public function details($id)
    {
        $deposit = Deposit::find($id);
        $paypal = Paypal::find($deposit->paypal_deposit_id);
        $bitcoin = Bitcoin::find($deposit->bitcoin_deposit_id);
        $bank = Bankdeposit::find($deposit->bank_deposit_id);
        return view('admin.transactions.deposit-details', compact(['deposit', 'bank', 'paypal', 'bitcoin']));
    }

    // Approve deposit
    public function approve($id)
    {
        $deposit = Deposit::find($id);
        //update user balance
        $user = User::find($deposit->user_id);
        $user->balance = $user->balance + $deposit->amount;
        $user->save();
        //@e
        $deposit->status = "approved";
        $deposit->save();

        // update status in transaction table
        $transaction = Transaction::find($deposit->tran_id);
        $transaction->status = 'approved';
        $transaction->save();

        $user->notify(new DepositApproval($deposit));

        return redirect()->route('admin.deposits')->with('success', $deposit->amount . ' Deposit Approved');
    }

    // cancel approval 
    public function cancel($id)
    {

        $deposit = Deposit::find($id);
        //update user balance
        $user = User::find($deposit->user_id);
        $user->balance = $user->balance - $deposit->amount;
        $user->save();
        //@e
        $deposit->status = "pending";
        $deposit->save();

        //update status in transactions table
        $transaction = Transaction::find($deposit->tran_id);
        $transaction->status = 'pending';
        $transaction->save();

        $user->notify(new DepositApprovalCancelled($deposit));

        return redirect()->route('admin.deposits')->with('danger', $deposit->amount . ' Deposit Approval Cancelled');
    }

    //decline deposit
    public function decline($id)
    {

        $deposit = Deposit::find($id);
        $deposit->status = "declined";
        $deposit->save();

        //update status in transactions table
        $transaction = Transaction::find($deposit->tran_id);
        $transaction->status = 'declined';
        $transaction->save();

        $user = User::find($deposit->user_id);

        $user->notify(new DepositDeclined($deposit));

        return redirect()->route('admin.deposits')->with('danger', $deposit->amount . ' Deposit Declined');
    }

    // Add deposit to trash
    public function delete($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status_2 = 'trash';
        $deposit->save();

        return redirect()->route('admin.deposits')->with('danger', 'Added to Trash');
    }
}
