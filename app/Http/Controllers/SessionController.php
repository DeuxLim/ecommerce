<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view("auth.login");
    }

    public function store(LoginRequest $request){
        $validatedData = $request->only('email', 'password');

        if(!Auth::attempt( $validatedData)){
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return redirect()->intended(route('product.index'));
    }

    public function destroy(){
        Auth::logout();

        return redirect(route('login'));
    }
}
