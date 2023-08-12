<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActiveLoan;
use App\Models\LoanPackage;
use App\Models\LoanRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    //
    public function viewRequest()
    {
        $loan_request = LoanRequest::all()->sortByDesc('id');
        return view('admin.loan.loan-requests.index', compact(['loan_request']));
    }

    public function requestDetail($id)
    {
        $loan_request = LoanRequest::find($id);
        $loan_package = LoanPackage::find($loan_request->loan_package_id);
        $user = User::find($loan_request->user_id);
        return view('admin.loan.loan-requests.detail', compact(['loan_request', 'loan_package', 'user']));
    }

    public function approveRequest($id)
    {
        $loan_request = LoanRequest::find($id);
        $loan_request->status = 'approved';
        $loan_request->save();

        $user = User::find($loan_request->user_id);
        $user->balance = $user->balance + $loan_request->loan_amount;
        $user->save();

        $loan_package = LoanPackage::find($loan_request->loan_package_id);

        $active_loan = new ActiveLoan();
        $active_loan->name = $loan_request->loan_package;
        $active_loan->user_id = $user->id;
        $active_loan->request_id = $loan_request->id;
        $active_loan->monthly_interest = $loan_package->monthly_interest;
        $active_loan->amount = $loan_request->loan_amount;
        $active_loan->monthly_payment = $loan_package->monthly_interest / 100 * $loan_request->loan_amount;
        $active_loan->emi_type = $loan_package->emi_type;
        $active_loan->tenure = $loan_package->tenure;
        $active_loan->save();

        return redirect()->back()->with('success', 'Loan Request Approved');
    }

    public function cancelLoanApproval($id)
    {
        $loan_request = LoanRequest::find($id);
        $loan_request->status = 'pending';
        $loan_request->save();

        $user = User::find($loan_request->user_id);
        $user->balance = $user->balance + $loan_request->loan_amount;
        $user->save();

        $active_loan = ActiveLoan::where('request_id', $loan_request->id);
        $active_loan->delete();

        return redirect()->back()->with('danger', 'Loan Request Approval Cancelled');
    }

    public function declineRequest($id)
    {
        $loan_request = LoanRequest::find($id);
        $loan_request->status = 'declined';
        $loan_request->save();

        return redirect()->back()->with('danger', 'Loan Request Declined');
    }

    public function deleteRequest($id)
    {
        $loan_request = LoanRequest::find($id);
        $loan_request->delete();

        return redirect()->back()->with('success', 'Loan Request Deleted Successfully');
    }


    public function viewActive()
    {
        $active_loan = ActiveLoan::paginate(10);
        return view('admin.loan.active-loans.index', compact(['active_loan']));
    }

    public function activeDetail($id)
    {
        $active_loan = ActiveLoan::find($id);
        $date = Carbon::createFromDate($active_loan->created_at)->addYears(3);
        return view('admin.loan.active-loans.detail', compact(['active_loan', 'date']));
    }
}
