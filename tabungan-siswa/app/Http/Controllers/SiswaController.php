<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
class SiswaController extends Controller
{   
    public function index() {
        $datasiswa = Siswa::join('users', 'siswas.user', '=', 'users.id')->get();
        return view('admin.adminsiswa', [
            'datanya' => $datasiswa
        ]);
    }

    public function hapus($NIS) {
        $siswanya = Siswa::where('NIS', $NIS)->delete();
        echo $NIS;
    }


    public function dapatkan() {
        $datanya = Siswa::get();
        echo $datanya;
    }
}
