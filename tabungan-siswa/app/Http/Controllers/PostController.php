<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function detailPost($berita_id) {
        $post = DB::table('beritas')->where('berita_id', $berita_id)->first();
            return view('user.post', ['post' => $post]);
    }
}
