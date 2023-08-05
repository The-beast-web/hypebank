<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\ActiveLoan;
use App\Models\Bank;
use App\Models\LoanPackage;
use App\Models\LoanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    //
    public function view()
    {
        
        $loan = ActiveLoan::where('user_id', Auth::id())->get();
        return view('customer.loan.index', compact('loan'));
    }

    public function viewPackages()
    {
        $loan_package = LoanPackage::all();
        return view('customer.loan.loan-package', compact('loan_package'));
    }

    public function readmore($id)
    {

        $loan = LoanPackage::find($id);
        return view('customer.loan.read-more', compact('loan'));
    }

    public function success()
    {
        return view('customer.loan.success');
    }

    public function application($id)
    {
        $bank = Bank::where('name', '!=', 'Hype Bank')->get();
        $loan = LoanPackage::find($id);
        $user = Auth::user();
        return view('customer.loan.loan-application', compact(['loan', 'user', 'bank']));
    }

    public function processApp($id)
    {

        $rules = [
            'full_name' => 'required|string',
            'dob' => 'required',
            'location' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'occupation' => 'required',
            'loan_type' => 'required',
            'monthly_income' => 'required',
            'loan_amount' => 'required',
            'bank' => 'required',
            'account_no' => 'required|digits:10',
            'account_name' => 'required'
        ];

        $validated = request()->validate($rules);

        $loan_package = LoanPackage::find($id);
        $loan_request = new LoanRequest();
        $loan_request->user_id = Auth::id();
        $loan_request->full_name = $validated['full_name'];
        $loan_request->dob = $validated['dob'];
        $loan_request->location = $validated['location'];
        $loan_request->city = $validated['city'];
        $loan_request->country = $validated['country'];
        $loan_request->phone = $validated['phone'];
        $loan_request->email = $validated['email'];
        $loan_request->occupation = $validated['occupation'];
        $loan_request->loan_type = $validated['loan_type'];
        $loan_request->monthly_income = $validated['monthly_income'];
        $loan_request->loan_amount = $validated['loan_amount'];
        $loan_request->account_no = $validated['account_no'];
        $loan_request->bank = $validated['bank'];
        $loan_request->account_name = $validated['account_name'];
        $loan_request->loan_package = $loan_package->name;
        $loan_request->status = 'pending';
        if ($validated['loan_amount'] > $loan_package->max_amount) {

            return redirect()->back()->with('error', 'Amount excess ' . $loan_package->amount);
        } elseif ($validated['loan_amount'] < $loan_package->min_amount) {

            return redirect()->back()->with('error', $loan_package->amount . ' is the minimum amount');
        } else {
            $loan_request->save();

            return redirect()->route('loan.success')
                ->with([
                    'amount' => $validated['loan_amount'],
                    'package' => $loan_package->name,
                    'restrict' => 'true'
                ]);
        }
    }
}
