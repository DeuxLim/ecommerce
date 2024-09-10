<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\UserRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Redirect;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request){
        $validatedData = $request->validated();
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'is_seller' => $validatedData['is_seller']
        ]);

        Mail::to($user->email)->send(new UserRegistered($user));

        Auth::login($user);

        return Redirect::route('product.index')->with('success', 'Welcome!');

    }
}
