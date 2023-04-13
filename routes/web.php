<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DetailTransactionsController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UsersController;


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

//Authentikasi
Route::middleware(['guest'])->group(function () {
    // Register
    Route::get('/register', [AuthController::class, "register"])->name('register');
    Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
    // Login
    Route::get('/login', [AuthController::class, "login"])->name('login');
    Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');
});
// Logout
Route::get('/logout', [AuthController::class, "logout"])->name('logout');


// Role Penjual
Route::middleware(['auth:web', 'isAdmin'])->group(function () {
    // Dashboard
    Route::get('/admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
    // Kategori
    Route::get('/admin/category', [CategoriesController::class, 'index'])->name('category');
    Route::get('/admin/category/add', [CategoriesController::class, 'create'])->name('category.add');
    Route::post('/admin/category/create', [CategoriesController::class, 'store'])->name('category.create');
    Route::get('/admin/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
    Route::put('/admin/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
    Route::get('/admin/category/destroy/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
    // Produk
    Route::get('/admin/product', [ProductsController::class, 'index'])->name('product');
    Route::get('/admin/product/add', [ProductsController::class, 'create'])->name('product.add');
    Route::post('/admin/product/create', [ProductsController::class, 'store'])->name('product.create');
    Route::get('/admin/product/edit/{id_products}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::put('/admin/product/update/{id_products}', [ProductsController::class, 'update'])->name('product.update');
    Route::get('/admin/product/destroy/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    // Transaksi
    Route::get('/transaction', [TransactionsController::class, 'index'])->name('showtr');
    Route::get('/transaction/{id}', [DetailTransactionsController::class, 'show'])->name('showdt');
    // Profile
    Route::get('/admin/profile/edit', [DashboardAdminController::class, 'edit'])->name('dashboard.edit');
    Route::put('/admin/profile/update', [DashboardAdminController::class, 'update'])->name('do.update');
});

// Role Pembeli
Route::middleware(['auth:web'])->group(function () {
    // Profile
    Route::get('/profile', [UsersController::class, "index"])->name('user.index');
    Route::put('/profile/update', [UsersController::class, "update"])->name('user.update');
    // Cart dan Transaksi
    Route::get('/cart', [DetailTransactionsController::class, "index"])->name('user.cart');
    Route::get('/cart-add/{id}', [DetailTransactionsController::class, "store"])->name('cart.store');
    Route::get('/cart/remove/{id}', [DetailTransactionsController::class, 'destroy'])->name('cart.remove');
    Route::post('/transactions/store', [TransactionsController::class, "store"])->name('transaction');
});

// Home
Route::get('/', [PagesController::class, "home"])->name('page.home');
// Semua Produk
Route::get('/product-all', [PagesController::class, "product_all"])->name('page.product_all');
// Produk Sesuai Kategori
Route::get('/product_category/{id}', [PagesController::class, "product_category"])->name('page.product_category');
// Produk Detail
Route::get('/product-detail/{id}', [PagesController::class, "product_detail"])->name('page.product_detail');
