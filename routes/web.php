<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BMIController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('dashboard', [ArtikelController::class, 'dashboard']);

Route::resource('kategori', KategoriController::class);
Route::get('kategori/{kategori}/delete', [KategoriController::class, 'destroy']);

Route::resource('artikel', ArtikelController::class);
Route::get('artikel/{artikel}/delete', [ArtikelController::class, 'destroy']);

Route::resource('users', UserController::class)->middleware('admin');
Route::get('users/{user}/delete', [UserController::class, 'destroy']);

Route::resource('bmi', BMIController::class)->middleware('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
