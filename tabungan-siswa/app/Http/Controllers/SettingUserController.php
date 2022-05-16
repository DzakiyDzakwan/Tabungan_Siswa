<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingUserController extends Controller
{
    public function index() {
        return view('user.settingUser');
    }
}
