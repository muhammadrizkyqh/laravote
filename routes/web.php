<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PemilihController;

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
    return view('login');
})->name('login');

Route::post('/', [LoginController::class, 'login'])->name('login.post');

Route::get('/dashboard', function () {
    return view('admins.dasboard');
})->name('dasboard');

Route::get('/pemilih', function () {
    return view('admins.pemilih');
})->name('pemilih');

Route::get('/kandidat', function () {
    return view('admins.kandidat');
})->name('kandidat');

Route::get('/index', function () {
    return view('users.index');
})->name('index');
