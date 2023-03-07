<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductContronller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');

// Admin
Route::get('/admin/products', [AdminProductContronller::class, 'index'])->name('admin.product');

Route::get('/admin/products/create', [AdminProductContronller::class, 'create'])->name('admin.product.create');
Route::post('/admin/products', [AdminProductContronller::class, 'store'])->name('admin.product.store');

Route::get('/admin/products/{product}/edit', [AdminProductContronller::class, 'edit'])->name('admin.product.edit');
Route::put('/admin/products/{product}', [AdminProductContronller::class, 'update'])->name('admin.product.update');
