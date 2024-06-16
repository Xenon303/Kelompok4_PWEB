<?php

use App\Http\berandaControllers\berandaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/berandadmin', function () {
    return view('berandadmin', [berandaController::class, 'berandadmin']);
});

Route::get('/register', function () {
    return view('register.index ');
});
Route::post('/register', [registerController::class, 'register']);


Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [loginController::class, 'login']);


Route::get('/produk', function () {
    return view('produk');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');


Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');

Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');

Route::put('/produk/{id}', [ProdukController::class, 'update'])->name('produk.update');

Route::delete('/produk/{id}', [ProdukController::class, 'destroy'])->name('produk.destroy');

Route::get('/produk/search', [ProdukController::class, 'search'])->name('produk.search');
