<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BankWithdrawal;
use App\Models\Paypal;
use App\Models\PaypalWithdrawal;
use App\Models\ServiceRevenue;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Withdrawal;
use App\Notifications\Withdrawal\WithdrawalApprovalCancelled;
use App\Notifications\Withdrawal\WithdrawalApproved;
use App\Notifications\Withdrawal\WithdrawalDeclined;

class WithdrawalController extends Controller
{
    //Main withdrawal list
    public function viewList()
    {
        $trash = Withdrawal::where('status_2', 'trash')->get();
        $count = 0;
        $withdraws = Withdrawal::where('status_2', 'active')->orderByDesc('id')->paginate(10);
        return view('admin.transactions.withdrawal.withdrawal', compact(['withdraws', 'count', 'trash']));
    }

    //Withdrawal trash list
    public function viewTrash()
    {
        $withdraws = Withdrawal::where('status_2', 'trash')->get()->sortByDesc('id');
        return view('admin.transactions.withdrawal.withdraw-trash', compact('withdraws'));
    }

    //Restore trash to main list
    public function trashRestore($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->status_2 = 'active';
        $withdraw->save();
        return redirect()->back()->with('success', 'Trash Restored Successfully');
    }

    //Permanently delete trash for admin only
    public function deleteTrashForAdmin($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->delete();
        return redirect()->back()->with('danger', 'Trash Permanently Deleted for Admin');
    }

    //Permanently delete trash for admin and user
    public function deleteTrashForAll($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->delete();
        //get user transaction to delete from transactions table
        $transaction = Transaction::find($withdraw->tran_id);
        $transaction->delete();
        //@e
        return redirect()->back()->with('danger', 'Trash Permanently Deleted for Admin & User');
    }

    //View withdrawal full details
    public function viewSingle($id)
    {
        $withdrawal = Withdrawal::find($id);
        $paypal = PaypalWithdrawal::find($withdrawal?->paypal_withdraw_id);
        $bank = BankWithdrawal::find($withdrawal?->bank_withdraw_id);
        return view('admin.transactions.withdrawal.withdrawal-detail', compact(['withdrawal', 'paypal', 'bank']));
    }

    //Approve withdrawal
    public function approve($id)
    {
        $withdraw = Withdrawal::find($id);
        $service = new ServiceRevenue();
        $service->amount = $withdraw->amount/100 * 10;
        $service->save();
        //update user balance
        $user = User::find($withdraw->user_id);
        $user->balance = $user->balance - $withdraw->amount - $service->amount;
        $user->save();
        //@e
        $withdraw->status = 'approved';
        $withdraw->save();
        //update status in transactions table
        $transaction = Transaction::find($withdraw->tran_id);
        $transaction->status = 'approved';
        $transaction->save();
        //@e

        $user->notify(new WithdrawalApproved($withdraw));

        return redirect()->route('admin.withdraw.list')->with('success', $withdraw->amount . ' Withdrawal Approved');
    }

    //Cancel approval
    public function cancel($id)
    {
        $withdraw = Withdrawal::find($id);
        $service = $withdraw->amount/100 * 10;
        //update user balance
        $user = User::find($withdraw->user_id);
        $user->balance = $user->balance + $withdraw->amount + $service;
        $user->save();
        //@e
        $withdraw->status = 'pending';
        $withdraw->save();
        //update status in transactions table
        $transaction = Transaction::find($withdraw->tran_id);
        $transaction->status = 'pending';
        $transaction->save();
        //@e

        $user->notify(new WithdrawalApprovalCancelled($withdraw));

        return redirect()->route('admin.withdraw.list')->with('success', $withdraw->amount . ' Withdrawal Approval Cancelled');
    }

    public function decline($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->status = 'declined';
        $withdraw->save();
        //update status in transactions table
        $transaction = Transaction::find($withdraw->tran_id);
        $transaction->status = 'declined';
        $transaction->save();
        //@e

        $user = User::find($withdraw->user_id);
        $user->notify(new WithdrawalDeclined($withdraw));

        return redirect()->route('admin.withdraw.list')->with('danger', $withdraw->amount . ' Withdrawal Declined');
    }

    //Add withdrawal to trash
    public function delete($id)
    {
        $withdraw = Withdrawal::find($id);
        $withdraw->status_2 = "trash";
        $withdraw->save();
        return redirect()->route('admin.withdraw.list')->with('danger', 'Added to Trash');
    }
}
