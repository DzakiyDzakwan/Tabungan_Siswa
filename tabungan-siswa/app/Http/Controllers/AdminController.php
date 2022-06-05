<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function create(Request $request)
    {
        return view('admin.create');
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

        return redirect('/daftar')->with('success', 'Account created Successfully!');
    }

    public function destroy($id) {

        admin::where('admin_id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }

    // public function store(Request $request)
    // {   
    //     $validatedData = $request->validate([
    //         'user_name' => 'required|min:1|max:12|unique:users',
    //         'email'=> 'required|email:dns|unique:users',
    //         'password' => 'required|min:5|max:255|confirmed',
    //     ]);

    //     $validatedData['password'] = Hash::make($validatedData['password']);

    //     User::create([
    //         'email'=>$request->email,
    //         'user_name'=>$request->user_name,
    //         'role'=> $request->role,
    //         'password' => $validatedData['password']
    //     ]);

    //     return redirect('/')->with('success', 'Account created Successfully!');
    // }
    // public function store(Request $request){
    //     $model = new user;
    //     $model-> user_name = $request->user_name;
    //     $model-> email = $request->email;
    //     $model-> password = $request->password;
    //     $model->save();

    //     return redirect('daftar');
    // }

    // public function edit($admin_id)
    // {
    //     $model = admin::find($admin_id);
    //     return view('admin.edit-admin', compact (
    //         'model'
    //     ));
    // }
}
