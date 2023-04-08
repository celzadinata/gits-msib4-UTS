<?php

use App\Http\Controllers\AuthController;
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

Route::prefix('admin')->middleware(['auth:web', 'isAdmin'])->group(function () {
    //Route admin semua ditaro disini
    //Contoh:
    //Route::get('/', [ProdukController::class, 'index']);
    //Route::get('/cart/add/{id}', [CartController::class, 'store']);
    Route::get('/', function () {
        return view('layouts.admin.test');
    });
});

Route::middleware(['auth:web'])->group(function () {
    //Route pembeli semua ditaro disini
    //Contoh:
    //Route::get('/', [ProdukController::class, 'index']);
    //Route::get('/cart/add/{id}', [CartController::class, 'store']);
    Route::get('/', function () {
        return view('layouts.user.test');
    });
});

//Auth
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');