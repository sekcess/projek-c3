<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
    "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title"  => "ABOUT",
    "nama"   => "NAMA LENGKAP         : Muhammad Alif Anugrah",
    "ttl"    => "TTL    : Pontianak, 27 Juli 200",
    "jk"     => "JENIS KELAMIN : PRIA",
    "alamat"  => "ALAMAT : JL.Tabrani Ahmad",
    "email"  => "EMAIL : itsalifanugrah@gmail.com",
    "img"    => "acin.png"
    ]);
});

Route::get('/news', [BeritaController::class, 'index']);
Route::get('/news/{news_posts:slug}',[BeritaController::class, 'show']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);