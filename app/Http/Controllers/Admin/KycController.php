<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Kyc;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KycController extends Controller
{
    //
    public function list()
    {
        $this->seo()->setTitle('Kyc Documents');
        $card = Card::where('user_id', Auth::id())->get();
        $kyc = Kyc::all();
        $users = User::where('setup', '!=', 'false')->get();
        return view('admin.kyc.index', compact(['users', 'kyc', 'card']));
    }

    //view kyc full details
    public function detail($id)
    {
        $kyc = Kyc::find($id);
        $user = User::find($kyc->user_id);
        $this->seo()->setTitle($user->name.'- Kyc Documents');
        return view('admin.kyc.detail', compact('user'));
    }

    public function approve($id)
    {
        $kyc = Kyc::find($id);
        $user = User::find($kyc->user_id);
        $user->kyc->status = 'approved';
        $user->setup = 'true';
        $user->save();
        $user->kyc->save();
        return redirect()->back()->with('success', 'Kyc Approved');
    }

    public function cancel($id)
    {
        $kyc = Kyc::find($id);
        $user = User::find($kyc->user_id);
        $user->kyc->status = 'pending';
        $user->setup = 'false';
        $user->save();
        $user->kyc->save();
        return redirect()->back()->with('danger', 'Kyc Approval Cancelled');
    }
    public function decline($id)
    {
        $kyc = Kyc::find($id);
        $user = User::find($kyc->user_id);
        $user->kyc->status = 'declined';
        $user->setup = 'false';
        $user->save();
        $user->kyc->save();
        return redirect()->back()->with('danger', 'Kyc Declined');
    }
}
