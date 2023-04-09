<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardAdminController;

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

Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');


Route::get('/category', [CategoriesController::class, 'index'])->name('category');
Route::get('/category/add', [CategoriesController::class, 'create'])->name('category.add');
Route::post('/category/create', [CategoriesController::class, 'store'])->name('category.create');
Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');

Route::prefix('admin')->middleware(['auth:web', 'isAdmin'])->group(function () {
    //Route admin semua ditaro disini
    //Contoh:
    //Route::get('/', [ProdukController::class, 'index']);
    //Route::get('/cart/add/{id}', [CartController::class, 'store']);
    Route::get('/', function () {
        return view('admin.test');
    });
});

Route::middleware(['auth:web'])->group(function () {
    //Route pembeli semua ditaro disini
    //Contoh:
    //Route::get('/', [ProdukController::class, 'index']);
    //Route::get('/cart/add/{id}', [CartController::class, 'store']);
    Route::get('/', function () {
        return view('user.test');
    });
});

//Auth
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
