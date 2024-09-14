<?php

namespace App\Http\Controllers;

use App\Models\Users\User;
use App\Mail\UserRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\EditUserAddress;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Models\Users\UserAddress;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        // Validate and create the user
        $validatedData = $request->validated();
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'is_seller' => $validatedData['is_seller']
        ]);

        // Optionally create a default address for the user
        // Here we assume default address fields; modify as needed
        $user->address()->create([
            'user_id' => $user->id,
            'address_line_1' => '', // Default or empty for now
            'address_line_2' => null,
            'city' => '',
            'state' => '',
            'country' => '',
            'postal_code' => '',
            'phone' => null,
            'is_default' => true
        ]);

        event(new Registered($user));
        Mail::to($user->email)->send(new UserRegistered($user));

        Auth::login($user);

        return Redirect::route('verification.notice');
    }

    public function verification_notice(){
        return view('auth.verify-email');
    }

    public function verify(EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect(route('product.index'));
    }

    public function resend_verification_notice(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    }

    public function edit_address(){
        $user = Auth::user();
        return view('user.details.edit-address', compact('user'));
    }

    public function update_address(EditUserAddress $request){
        $validatedData = $request->validated();
        $user = Auth::user();

        // Use `updateOrCreate` to update the existing address or create a new one
        $address = $user->address()->updateOrCreate(
            [], // No conditions because we're updating/creating the user's address
            $validatedData + ['user_id' => $user->id] // Merge validated data with user_id
        );

        return redirect()->route('product.index')->with('message', 'Address updated successfully.');
    }
}
