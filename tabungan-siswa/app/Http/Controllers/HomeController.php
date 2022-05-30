<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index() {

        $jlhBerita = 6;
        $berita = DB::table('beritas')->paginate($jlhBerita);
            return view('user.home', ['beritas' => $berita]);
    }

    public function cari(Request $request) {
        $jlhBerita = 6;
        $cari = $request->cari;

        $berita = DB::table('beritas')
            ->where('judul', 'like', "%".$cari."%")
            ->orWhere('isi', 'like', "%".$cari."%")->paginate($jlhBerita);
            return view('user.home', ['beritas' => $berita]);
    }


}
