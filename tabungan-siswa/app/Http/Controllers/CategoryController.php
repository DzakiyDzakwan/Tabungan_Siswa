<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Berita;

class CategoryController extends Controller
{
    public function index() {
        $dataKategori = Category::orderBy('category_id')->paginate(5);
        return view('admin.category', [
            'datanya' => $dataKategori
        ]);
    }

    public function hapus($category_id) {
        Berita::where('category', $category_id)->delete();
        Category::where('category_id', $category_id)->delete();
        return back()->with('success','Category sukses dihapus!');
    }

    public function create(Request $request) {
        $validate = $request->validate([

            'namakategori'=> "required",
            'idkategori' => "required"

        ]);

        Category::create([
            'category_id'=>$request->idkategori,
            'name'=>$request->namakategori
        ]);

        return back()->with('success','Category sukses dibuat!');
    }

    public function edit(Request $request) {
        $validate = $request->validate([
            'namakategori'=> "required",
        ]);

        Category::where('category_id', $request->category_id)->update([

            'name'=>$request->namakategori,
        ]);

        return back()->with('success','Category sukses di Update!');
    }
}
