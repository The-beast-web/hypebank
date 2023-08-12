<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Cardrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    //
    public function view(){
        $cards = Card::where('user_id', Auth::id())->get();
        
        return view('customer.card.card-request', compact('cards'));
    }

    public function success(){
        return view('customer.card.card-success');
    }
    public function cardRequest(){
        $rules = [
            'card' => 'required',
            'card_pin' => 'required|size:4'
        ];

        $validated = request()->validate($rules);

        $card = new Cardrequest();
        $card->user_id = Auth::id();
        $card->card_type = $validated['card'];
        $card->card_pin = $validated['card_pin'];
        $card->status = "pending";
        $card->save();

        return redirect()->route('customer.card.success');
    }
}
