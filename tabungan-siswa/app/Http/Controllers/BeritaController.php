<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.adminberita', compact(
            'beritas'
        ));
    }
    
    public function update(Request $request) {
        
        $validate = $request->validate([
            'berita'=> "required",
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