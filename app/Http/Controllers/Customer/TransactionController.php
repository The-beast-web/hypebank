<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    //
    public function view(){
        $trans = Transaction::where('user_id', Auth::id())->get()->sortByDesc('id');
        return view('customer.transaction', compact('trans'));
    }
}
