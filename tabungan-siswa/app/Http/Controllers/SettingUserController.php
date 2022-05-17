<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SettingUserController extends Controller
{
    public function index() {
        return view('user.settingUser');
    }
}
