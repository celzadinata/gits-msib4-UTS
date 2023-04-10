<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
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



Route::get('/tes', [PagesController::class, "home"])->name('home');


//Authentikasi
// Register
Route::get('/register', [AuthController::class, "register"])->name('register');
Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
// Login
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
// Logout
Route::get('/logout', [AuthController::class, "logout"])->name('logout');


// Role Penjual
Route::middleware(['auth:web', 'isAdmin'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
    // Kategori
    Route::get('/category', [CategoriesController::class, 'index'])->name('category');
    Route::get('/category/add', [CategoriesController::class, 'create'])->name('category.add');
    Route::post('/category/create', [CategoriesController::class, 'store'])->name('category.create');
    Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
    // Profile
    Route::get('/edit', [DashboardAdminController::class, 'edit'])->name('dashboard.edit');
    Route::put('/update', [DashboardAdminController::class, 'update'])->name('do.update');
});

// Role Pembeli
Route::middleware(['auth:web'])->group(function () {
    Route::get('/', function () {
        return view('user.test');
    });
});

