<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () { 
Route::get('/register', [AuthController::class, 'register'])->name('register');//menampilkan
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');//mengarahkan 
});

Route::group(['middleware' => 'auth'], function(){
Route::get('/karyawan',[KaryawanController::class,'index']);
Route::delete('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/karyawan/create',[KaryawanController::class,'create']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/{id}/update',[KaryawanController::class,'update']);
Route::put('/karyawan/{id}',[KaryawanController::class,'edit']);
Route::delete('/karyawan/{id}',[KaryawanController::class,'destroy']);
});
