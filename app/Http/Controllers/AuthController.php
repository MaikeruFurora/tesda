<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('auth/login');
    }

    public function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            switch (Auth::user()->user_type) {
                case 'applicant':
                    return redirect()->route('applicant.dashboard');
                    break;
                case 'officer':
                    return redirect()->route('officer.dashboard');
                    break;
                case 'administrator':
                    return redirect()->route('administrator.dashboard');
                    break;
                default:
                        return false;
                    break;
            }
        }
  
        return redirect()->route('auth.login')->with('msg','Login details are not valid');
    }

    public function register(){
        return view('auth/register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required_with:password_confirmed',
        ]);
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('auth.login');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
