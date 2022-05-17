<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Admin;

class ProfilController extends Controller
{
    
    public function index() {

        
        $id = auth()->user()->id;

        if(auth()->user()->role === 'siswa') {
           $checkProfile =  Siswa::where('user', $id)->exists();

           if($checkProfile) {
            return redirect('/home');
        } 

        } else {
            $checkProfile =  Admin::where('user', $id)->exists();

            if($checkProfile) {
                return redirect('/kategori');
            } 
        }

        return view('daftar');

    }

    public function daftar(Request $request) {

        $id = auth()->user()->id;

        if(auth()->user()->role === 'siswa') {

            $credential = $request->validate([
                'NIS' => 'required|unique:siswas'
            ]);

            Siswa::Create([
                'NIS'=>$request->NIS,
                'kelas'=>$request->kelas,
                'user' => $id
            ]);

            return redirect('/home');

        } else {

            $credential = $request->validate([
                'pekerjaan' => 'required'
            ]);

            Admin::Create([
                'pekerjaan'=>$request->pekerjaan,
                'status'=>'active',
                'user' => $id
            ]);

            return redirect('/admin');

        }

    }

}
