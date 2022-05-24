<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Admin;

class SettingUserController extends Controller
{
    public function index() {

        $id  = auth()->user()->id;

        if(auth()->user()->role === "siswa") {
            $profil =  Siswa::where('user', $id)->get()[0];

            return view('user.settingUser', [
                'profil'=>$profil
            ]);
        } else {
            $profil =  Admin::where('user', $id)->get()[0];

            return view('admin.settingUser', [
                'profil'=>$profil
            ]);

        }

        
    }

    public function updateUser(Request $request) {
        $id  = auth()->user()->id;

        $validate = $request->validate([
            'user_name'=>['required'],
            'email'=>['required'],
            'password'=>['required', ['confirmed']]
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::where('id', $id)->update([
            'email'=>$request->email,
            'user_name'=>$request->user_name,
            'password' => $validate['password']
        ]);

        return back()->with('success', 'Data berhasil diubah');
    }

    public function update(Request $request) {
        $id  = auth()->user()->id;
        //dd($request->all());

        if(auth()->user()->role === "siswa") {

            $validate = $request->validate([
                'nama'=>['required'],
            ]);
    
            Siswa::where('user', $id)->update([
    
                'nama'=>$request->nama,
                'kelas'=>$request->kelas,
    
            ]);

        } else {

            $validate = $request->validate([
                'nama'=>['required'],
                'pekerjaan'=>['required']
            ]);
    
            Admin::where('user', $id)->update([
    
                'nama'=>$request->nama,
                'pekerjaan'=>$request->pekerjaan,
    
            ]);

        }

        

        return back()->with('success', 'Data berhasil diubah');
    }
}
