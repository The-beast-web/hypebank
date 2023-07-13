<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'name' => 'required',

            'email' => 'required|email|unique:users,email',
            'password' => 'required',

            'account_type' => 'required',

            'user_type' => 'required'


        ];

        $validated = request()->validate($rules);

        $user = new User();

        $user->name = $validated['name'];

        $user->email = $validated['email'];

        $user->password = Hash::make($validated['password']);

        $user->account_type = $validated['account_type'];

        $user->user_type = $validated['user_type'];

        $user->setup = "false";


        $user->save();

        return redirect()->route('admin.dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {

        $kyc = Kyc::where('user_id', $user->id)->first();
        return view('admin.users.edit', compact(['user', 'kyc']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {

        /* dd($request->all()); */

        //
        $rules = [
            'email' => 'unique:users,email,' . $user->id . ',id'
        ];

        $validated = request()->validate($rules);

        //$request = request()->all();

        $kyc = Kyc::where('user_id', $user->id)->first();



        $user->name = $request->name;
        $user->email = $validated['email'];
        $user->password = $request->password;
        $user->user_type = $request->user_type;
        $user->account_type = $request->acc_type;

        if (request()->has('user_profile')) {
            $path = Storage::disk('mydisk')->put('user-profiles', request()->file('user_profile'));
            $user->user_profile = $path;
        }

        $user->save();

        if (!is_null($kyc)) {
            $kyc->user_id = $user->id;
            $kyc->phone = $request->phone;
            $kyc->gender = $request->gender;
            $kyc->dob = $request->dob;
            $kyc->address1 = $request->address1;
            $kyc->address2 = $request->address2;
            $kyc->city = $request->city;
            $kyc->state = $request->state;
            $kyc->country = $request->country;
            $kyc->zipcode = $request->zipcode;
            $kyc->id_front = $request->id_front;
            $kyc->id_back = $request->id_back;
            $kyc->id_type = $request->id_type;

            if (request()->has('id_front')) {
                $path = Storage::disk('mydisk')->put('kyc-photos', request()->file('id_front'));
            }

            if (request()->has('id_back')) {
                $path = Storage::disk('mydisk')->put('kyc-photos', request()->file('id_back'));
            }

            $kyc->save();
        } else {
            $kyc = new Kyc();
            $kyc->user_id = $user->id;
            $kyc->phone = $request->phone;
            $kyc->gender = $request->gender;
            $kyc->dob = $request->dob;
            $kyc->address1 = $request->address1;
            $kyc->address2 = $request->address2;
            $kyc->city = $request->city;
            $kyc->state = $request->state;
            $kyc->country = $request->country;
            $kyc->zipcode = $request->zipcode;
            $kyc->id_front = $request->id_front;
            $kyc->id_back = $request->id_back;
            $kyc->id_type = $request->id_type;

            if (request()->has('id_front')) {
                $path = Storage::disk('public')->put('kyc-photos', request()->file('id_front'));
            }

            if (request()->has('id_back')) {
                $path = Storage::disk('public')->put('kyc-photos', request()->file('id_back'));
            }

            $kyc->save();
        }


        return redirect()->route('admin.users.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
