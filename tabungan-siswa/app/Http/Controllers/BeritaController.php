<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Admin;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        // Tombol Search
        
        $cari = $request->cari;
        $beritas =Berita::where('judul', 'LIKE', '%'.$cari.'%') 
            ->orwhere('category', 'LIKE', '%'.$cari. '%')
            ->paginate(5);
        // end Tombol search

        $beritas = Berita::join('admins', 'admins.admin_id', '=', 'beritas.author')->join('categories', 'beritas.category', '=', 'categories.category_id')->select('beritas.berita_id', 'beritas.judul', 'beritas.image', 'beritas.isi', 'categories.name AS category_name', 'admins.nama AS admin_name' )->paginate(5);
        $categories = Category::all();
        $admin = Admin::all();

       /*  dd($categories); */
        return view('admin.adminberita',([
            'categories'=>$categories,
            'beritas'=>$beritas,
            'admin'=>$admin,
            'cari'=>$cari
        ]));

    }
    
    public function store(Request $request)
    {
        $id = auth()->user()->id;
        $admin = User::select('admins.admin_id')->join('admins', 'admins.user', '=', 'users.id')->where('admins.user', $id)->get()[0]['admin_id'];

        /* dd($request->all()); */
        $validatedData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg|max:10240',
        ]);

        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('ImageBerita',   $fileName, 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

        Berita::create([

            'judul'=>$request->judul,
            'image'=>$validatedData['image'],
            'isi'=>$request->isi,
            'category'=>$request->category,
            'author'=>$request->author,

        ]);

        return back()->with('success', 'Berita Berhasil dibuat');
    }

    public function update(Request $request) {
        
        $validatedData = $request->validate([
            'image' => 'mimes:png,jpg,jpeg|max:10240',
        ]);
        
        // dd($request->all()); 
        if($request->hasFile('image')){
            $fileName = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('ImageBerita',   $fileName, 'public');
            $validatedData['image'] = '/storage/' . $path;
        }

        $validate = $request->validate([
            'judul'=> "required",
        ]);

        Berita::where('berita_id', $request->berita_id)->update([

            'judul'=>$request->judul,
            'image'=>$request->image,
            'isi'=>$request->isi,
            'category'=>$request->category
            
        ]);

        return back()->with('success', 'Data Berhasil diubah');

    }

    public function destroy($id) {

        Berita::where('berita_id', $id)->delete();

        return back()->with('success', 'Data Berhasil dihapus');

    }

}