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
    
    


});

Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth')->group(function() {

    


    Route::get('/daftar', [ProfilController::class, 'index'])->name('daftar');

    Route::post('/daftar', [ProfilController::class, 'daftar']);

    
    Route::middleware('checkprofil')->group(function(){

        //Update Profile
        Route::patch('/update-profil', [SettingUserController::class, 'update']);
    
        Route::middleware('siswa')->group(function() {


            //User
            //Create
            

            //Read
            Route::get('/transaction', [TransactionController::class, 'siswa'])->name('transaction');
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
            Route::get('/siswa', [SiswaController::class, 'index']);
            Route::get('/admintransaction', [TransactionController::class, 'admin'])->name('transaction-Admin');
            Route::post('/transaction/create', [TransactionController::class, 'store']);
            Route::get('/settingAdmin', [SettingUserController::class, 'index']);


            //Update
            Route::get('/siswa/{id}', [SiswaController::class, 'index1']);


            //Delete
            Route::get('/hapus/{NIS}/{id}', [SiswaController::class, 'hapus']);

        });

    });

    

});






