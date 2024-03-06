<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});

// Route::get('/produk', function(){
//     return view('layouts.produk');
// }); 

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk', [produkcontroller::class, 'index']);
Route::get('/produk/create', [produkcontroller::class, 'create']);
Route::post('/produk', [produkcontroller::class, 'store']);
Route::get('/produk/{id}', [produkcontroller::class, 'edit']);
Route::put('/produk/{id}', [produkcontroller::class, 'update']);
Route::delete('/produk/{id}', [produkcontroller::class, 'destroy']);
Route::get('/kategori', [kategoricontroller::class, 'index']);
Route::get('/kategori/create', [kategoricontroller::class, 'create']);
Route::post('/kategori', [kategoricontroller::class, 'store']);
Route::get('/kategori/{id}', [kategoricontroller::class, 'edit']);
Route::put('/kategori/{id}', [kategoricontroller::class, 'update']);
Route::delete('/kategori/{id}', [kategoricontroller::class, 'destroy']);