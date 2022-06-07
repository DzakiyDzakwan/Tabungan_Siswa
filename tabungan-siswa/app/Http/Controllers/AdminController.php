<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $datas = admin::all();
        return view('admin.admin-admin', compact(
            'datas'
        ));
    }

    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'user_name' => 'required|min:1|max:12|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create([
            'email'=>$request->email,
            'user_name'=>$request->user_name,
            'role'=> $request->role,
            'password' => $validatedData['password']
        ]);

        return redirect('/admin')->with('success', 'Account created Successfully!');
    }

    public function destroy($id) {

        admin::where('admin_id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }


}
