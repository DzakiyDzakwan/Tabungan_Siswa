<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function show() {

        $posts = DB::table('beritas');
        if(request('cari')) {
            $posts->where('judul', 'like', '%' . request('cari') . '%')
                ->orWhere('author', 'like', '%' . request('cari') . '%');
        }
        
        $posts = DB::table('beritas')->orderBy('berita_id')->paginate(6);
            
        return view('user.home', ['posts' => $posts]);
            
    }

    // public function cari(Request $request) {

    //     $cari = $request->cari;
    //     $posts = DB::table('beritas')->where('judul', 'like', "%".$cari."%")->paginate();
    //         return view('user.home', ['beritas' => $posts]);
    // }


}
