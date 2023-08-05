<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class TransactionController extends Controller
{
    //
    public function view()
    {
        $trans = Transaction::where('user_id', Auth::id())->orderByDesc('id')->paginate(10);
        $count = Transaction::where('user_id', Auth::id());
        return view('customer.transaction.transaction', compact(['trans', 'count']));
    }

    public function detail($id)
    {
        $trans = Transaction::find($id);  
        return view('customer.transaction.detail', compact('trans'));
    }

    public function delete($id)
    {
        $trans = Transaction::find($id);
        $trans->delete();
        return redirect()->back();
    }
}
