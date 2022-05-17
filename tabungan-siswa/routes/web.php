<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;

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

//Guest

Route::middleware('guest')->group(function(){

    //Login & Register
    Route::get('/', [LoginController::class, 'index'])->name('login');

    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', [RegisterController::class, 'index'])->name('register');

    Route::post('/regist', [RegisterController::class, 'regist']);

});

Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function() {


    Route::get('/daftar', [ProfilController::class, 'index'])->name('daftar');

    Route::post('/daftar', [ProfilController::class, 'daftar']);

    
    Route::middleware('checkprofil')->group(function(){
    
        Route::middleware('siswa')->group(function() {


            //User
            //Create


            //Read
            Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
            Route::get('/home', [HomeController::class, 'index']);
            Route::get('/post', [PostController::class, 'index']);
            Route::get('/settingUser', [SettingUserController::class, 'index']);


            //Update


            //Delete

        });
    
        Route::middleware('admin')->group(function(){
            //Admin
            //Create


            //Read
            Route::get('/kategori', [CategoryController::class, 'index']);


            //Update


            //Delete

        });

    });

    

});



/* -------------------------------------------------------------------------------------- */










