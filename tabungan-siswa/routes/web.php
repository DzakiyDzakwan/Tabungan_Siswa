<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('testlogin');
});

Route::get('/register', function() {
    return view('testregister');
});

//Admin
//Create


//Read
Route::get('/kategori', [CategoryController::class, 'index']);

//Update


//Delete


//User
//Create


//Read
Route::get('/transaction', [TransactionController::class, 'index']);


Route::get('/home', [HomeController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);


//Update

Route::get('/settingUser', [SettingUserController::class, 'index']);

//Delete
