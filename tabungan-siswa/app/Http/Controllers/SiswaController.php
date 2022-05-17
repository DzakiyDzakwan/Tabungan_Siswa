<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{   
    public function index() {
        $datasiswa = Siswa::get();
        return view('admin.adminsiswa', [
            'datanya' => $datasiswa->users->id
        ]);
    }

    public function dapatkan() {
        $datanya = Siswa::get();
        echo $datanya;
    }
}
