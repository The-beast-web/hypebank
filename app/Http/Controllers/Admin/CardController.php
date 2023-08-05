<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Cardrequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function view()
    {
        $this->seo()->setTitle('Card Requests');
        $cards = Cardrequest::where('status', 'pending' || 'status', 'declined')->get();
        return view('admin.card.card-request', compact('cards'));
    }

    public function viewAvailable(){
        $this->seo()->setTitle('Available Cards');
        $cards = Card::all();
        return view('admin.card.cards', compact('cards'));
    }

    public function approve($id, Request $request)
    {

        //dd($id);

        $cardRequest = Cardrequest::find($id);

        if ($cardRequest) {
            $card = new Card();
            $card->user_id = $cardRequest->user->id;
            $card->cvv = rand(000, 999);
            $card->card_number = rand(0000000000, 9999999999);
            $card->card_expiry = Carbon::now()->years(2);
            $card->card_type = $cardRequest->card_type;
            $card->card_pin = $cardRequest->card_pin;
            $card->card_name = $cardRequest->user->name;
            $cardRequest->status = 'approved';
            $card->save();
            $cardRequest->save();
        }

        return redirect()->route('admin.card.request');
    }
}
