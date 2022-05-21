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
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Models\Siswa;

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
    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/hapus/{NIS}', [SiswaController::class, 'hapus']);



});



Route::middleware('auth')->group(function() {

    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/daftar', [ProfilController::class, 'index'])->name('daftar');

    Route::post('/daftar', [ProfilController::class, 'daftar']);

    
    Route::middleware('checkprofil')->group(function(){

    
        Route::middleware('siswa')->group(function() {


            //User
            //Create


            //Read
            Route::get('/transaction', [TransactionController::class, 'siswa'])->name('transaction');
            Route::get('/home', [HomeController::class, 'show']);
            Route::get('/home/cari', [HomeController::class, 'cari']);
            Route::get('/post/{berita_id}', [PostController::class, 'detailPost']);
            Route::get('/settingUser', [SettingUserController::class, 'index']);


            //Update
            Route::patch('/siswa/update-user', [SettingUserController::class, 'updateUser']);
            Route::patch('/siswa/update-profil', [SettingUserController::class, 'updateProfil']);

            //Delete

        });
    
        Route::middleware('admin')->group(function(){
            //Admin
            //Create
            Route::post('/transaction/create', [TransactionController::class, 'store']);

            //Read
            Route::get('/admintransaction', [TransactionController::class, 'admin'])->name('admintransaction');
            Route::get('/kategori', [CategoryController::class, 'index']);
            Route::get('/admin/berita', [BeritaController::class, 'index']);
            Route::resource('/admin', AdminController::class);
            //Update


            //Delete

        });

    });

    

});



/* -------------------------------------------------------------------------------------- */










