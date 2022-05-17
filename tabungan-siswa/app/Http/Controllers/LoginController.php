<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){

        return view('login', [
            'title' => "Login"
        ]);

}

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){

            $request->session()->regenerate();

            //return redirect()->intended('/testadmin');

            if(Auth::user()->role === "siswa" ) {
                return redirect()->intended('/home');
            } else {
                return redirect()->intended('/kategori');
            }

            
        }

        return back()->with('loginError', 'Login Fail, Try again');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    
}
