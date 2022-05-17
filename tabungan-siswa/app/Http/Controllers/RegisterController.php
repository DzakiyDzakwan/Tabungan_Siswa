<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){

        return view('register', [
            'title' => "Register"
        ]);

    }

    public function regist(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required|min:1|max:12|unique:users',
            'nama' => 'required|max:225',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create([
            'user_name'=>$request->user_name,
            'nama'=>$request->nama,
            'role'=> 'siswa',
            'password' => $validatedData['password']
        ]);

        return redirect('/')->with('success', 'Account created Successfully!');
    }
}
