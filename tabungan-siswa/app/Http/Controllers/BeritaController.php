<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::join('admins', 'admins.admin_id', '=', 'beritas.author')->join('categories', 'beritas.category', '=', 'categories.category_id')->select('beritas.berita_id', 'beritas.judul', 'beritas.image', 'beritas.isi', 'categories.name AS category_name', 'admins.nama AS admin_name' )->paginate(5);
        return view('admin.adminberita', compact(
            'beritas'
        ));
    }
    
    public function update(Request $request) {
        
        $validate = $request->validate([
            'judul'=> "required",
        ]);

        Berita::where('berita_id', $request->berita_id)->update([

            'judul'=>$request->judul,
            'isi'=>$request->isi,
        ]);

        return back()->with('success', 'Data Berhasil diubah');

    }

    public function destroy($id) {

        Berita::where('berita_id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }

}