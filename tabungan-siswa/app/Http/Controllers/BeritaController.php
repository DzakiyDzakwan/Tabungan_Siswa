<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Admin;
use App\Models\Category;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::join('admins', 'admins.admin_id', '=', 'beritas.author')->join('categories', 'beritas.category', '=', 'categories.category_id')->select('beritas.berita_id', 'beritas.judul', 'beritas.image', 'beritas.isi', 'categories.name AS category_name', 'admins.nama AS admin_name' )->paginate(5);
        return view('admin.adminberita', compact(
            'beritas'
        ));

    }

    // public function create()
    // {
    //     $categories = Categories::all();
    //     return view('berita', compact('categories'));
    // }
    
    public function store(Request $request)
    {
        $id = auth()->user()->id;

        $admin = User::select('admins.admin_id')->join('admins', 'admins.user', '=', 'users.id')->where('admins.user', $id)->get()[0]['admin_id'];

        Berita::create([

            'judul'=>$request->judul,
            'image'=>$request->image,
            'isi'=>$request->isi,
            'admin'=>$admin

        ]);

        return back()->with('success', 'Transaksi Berhasil');
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