<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Transfer;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function dashboard(){
        $deposit = Deposit::where('user_id', Auth::id())->where('status', 'approved');
        $transfer = Transfer::where('user_id', Auth::id());
        $withdraw = Withdrawal::where('user_id', Auth::id());
        return view('customer.home.index', compact(['deposit', 'transfer', 'withdraw']));
    }

    public function notif(){
        $notif = DatabaseNotification::where('user_id', Auth::id())->get();
        return view('customer.layout.topbar', compact('notif'));
    }
}
