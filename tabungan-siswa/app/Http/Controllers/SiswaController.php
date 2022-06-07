<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Pagination\CursorPaginator;

class SiswaController extends Controller
{   
    public function index() {
        // $datasiswa = Siswa::join('users', 'siswas.user', '=', 'users.id')->get()->paginate(1);
        $datasiswa = Siswa::join('users', 'siswas.user', '=', 'users.id')->orderBy('user')->paginate(5);
        return view('admin.adminsiswa', [
            'datanya' => $datasiswa
        ]);
    }
    public function index1($id) {
        $datasiswa = Siswa::join('users', 'siswas.user', '=', 'users.id')->get();
        return view('admin.adminsiswa', [
            'idnya' => $id,
            'datanya' => $datasiswa
        ]);
        // return $id;
    }

    public function hapus($NIS, $id) {
        Siswa::where('NIS', $NIS)->delete();
        USER::where('id', $id)->delete();
        return redirect('/siswa');
    }

    public function edit($id) {
        $datasiswa = Siswa::join('users', 'siswas.user', '=', 'users.id')->get();
        return view('/siswa', [
            'idnya' => $id,
            'datanya' => $datasiswa
        ]);
    }


    public function dapatkan() {
        $datanya = Siswa::get();
        echo $datanya;
    }
}
