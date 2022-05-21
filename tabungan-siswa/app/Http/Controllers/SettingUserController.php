<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Siswa;

class SettingUserController extends Controller
{
    public function index() {

        $id  = auth()->user()->id;

       $profil =  Siswa::where('user', $id)->get()[0];

        /* dd($profil); */

        return view('user.settingUser', [
            'profil'=>$profil
        ]);
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

    public function updateProfil(Request $request) {
        $id  = auth()->user()->id;
        /* dd($request->all());
 */
        $validate = $request->validate([
            'nama'=>['required'],
        ]);

        Siswa::where('user', $id)->update([

            'nama'=>$request->nama,
            'kelas'=>$request->kelas,

        ]);

        return back()->with('success', 'Data berhasil diubah');
    }
}
