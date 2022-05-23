<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{   
    
    public function index() {
        $datas = admin::all();
        return view('admin.admin-admin', compact(
            'datas'
        ));
    }

    public function create() {
        $model = new admin;
        return view('admin.create-admin', compact (
            'model'
        ));
    }

    public function store(Request $request){
        $model = new admin;
        // $model-> admin_id = $request->admin_id;
        $model-> nama = $request->nama;
        $model-> pekerjaan = $request->pekerjaan;
        $model-> status = $request->status;
        $model->save();

        return redirect('admin');
    }
}