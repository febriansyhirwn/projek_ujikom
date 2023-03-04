<?php

use App\Http\Controllers\MekanikController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\MekanikController;



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
// ----halaman utama----
Route::get('/', function () {
    return view('welcome');
})->name('login');
route::post('user/auth', [UserController::class, 'Auth']);
route::post('user/logout', [UserController::class, 'logout']);



// ------halaman admin------
Route::get('dasbord', function () {
    return view('layouts/dasbord');
});
Route::get('/data', function () {
    return view('layouts/data');
});
Route::get('/pesanan', function () {
    return view('layouts/member');
});
Route::get('/profile', function () {
    return view('layouts/profile');
});
Route::get('/mekanik', function () {
    return view('layouts/mekanik');
});
// -------login------
Route::get('/login', function () {
    return view('login/login');
});
Route::get('/signup', function () {
    return view('login/signup');
});


// mekanik
Route::get('/mekanik',[MekanikController::class, 'ambil']);
Route::get('/mekanik/add',[MekanikController::class, 'tambah']);
Route::post('/mekanik/add',[MekanikController::class, 'add']);
Route::get('/mekanik/update/{id}',[MekanikController::class, 'edit']);
Route::get('/mekanik/update/{id}',[MekanikController::class, 'update']);