<?php

namespace App\Http\Controllers;

use App\UserProfile;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->except(['index']);
        $this->middleware('auth');
    }

    public function index()
    {
        $userprofiles = auth()->user()->userprofile()->get(); //dd($userProfile);
        return view('users.index', compact('userprofiles'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        auth()->user()->userprofile()->create($this->validateRequest());

        return redirect('/')->with('message', 'New user registered successfully');
    }

    public function show(UserProfile $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(UserProfile $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UserProfile $user)
    {
      
        auth()->user()->userprofile()->update($this->validateRequest());

        return redirect('users/'.$user->id)->with('message', 'User updated successfully');
    }

    public function validateRequest()
    {
        return request()->validate([
            "firstname" => ['required'],
            "lastname" => ['required'],
            "address" => ['required'],
        ]);
    }
}
