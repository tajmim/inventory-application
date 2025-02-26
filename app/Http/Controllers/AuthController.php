<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|email',
            'password' => 'required|string|min:6',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 400);
        }


        $credentials = $request->only('email', 'password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            return redirect()->route('newsfeed');
        }


        return redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }



    public function signup(){
        return view('signup');
    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|string|same:password',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with(['error' => $validator->errors()], 400);
        }


        $user  = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)
        ]);
        
        if (!$user) {
            return redirect()->back()->with(['error' => "Error to complete registration!"], 400);
        }

        return redirect()->back()->with(['success' => 'You are Registered Successfully'], 200);
    }

    
}
