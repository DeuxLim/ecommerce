<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);

        $attributes['password'] = Hash::make($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/');

    }
}
