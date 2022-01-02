<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login',[
            'tittle' => 'login',
            'active' => 'login'
        ]);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'NIP_PAA' => 'required',
            'PASSWORD' => 'required'
        ]);

        if(auth::attempt($credentials)){
            $request->session() -> regenerate();
            return redirect() ->  intended('/penjadwalan');
        }

        return back() -> with('LoginError', 'Login failed!');

    }

    public function logout(Request $request)
    {
        auth::logout();

            // $request->session()->invalidate();

            // $request->session()->regenerateToken();

            return redirect('/login');
    }
}
