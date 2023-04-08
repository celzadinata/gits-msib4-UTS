<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

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

Route::get('/category', [CategoriesController::class, 'index'])->name('category');
Route::get('/category/add', [CategoriesController::class, 'create'])->name('category.add');
Route::post('/category/create', [CategoriesController::class, 'store'])->name('category.create');
Route::get('/category/edit/{id}', [CategoriesController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoriesController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoriesController::class, 'destroy'])->name('category.destroy');
