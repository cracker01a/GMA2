<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function authregister()
    {
        return view('auth.auth-register');
    }
    public function authregisterPost(Request $request)
    {
        if(User::where('email', $request->email)->exists()) {
            return back()->with('error', 'Cet email exite déja dans la base de donnée');
        } else {
            $user = new User(); 
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->to(route("auth.auth-login"))->with('success', 'Register successfully');
        }
    }

    public function authlogin()
    {
        return view('auth.auth-login');
    }
    public function authloginPost(LoginRequest $request)
    {
        $credentials = $request->validated();
        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.index'));
            
        }

        return to_route('auth.auth-login')->withErrors([
            'email' => "Email ou mot de passe invalid"
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('auth.auth-logout');
    }
    public function authlogout()
    {
        return view('auth.auth-logout');
    }
    
    public function authemailverification()
    {
        return view('auth.auth-email-verification');
    }
    public function authconfirmmail()
    {
        return view('auth.auth-confirm-mail');
    }
    public function authlockscreen()
    {
        return view('auth.auth-lock-screen');
    }
    public function authrecoverpw()
    {
        return view('auth.auth-recoverpw');
    }
    public function authtwostepverification()
    {
        return view('auth.auth-two-step-verification');
    }
}
