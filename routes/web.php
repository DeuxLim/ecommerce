<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;

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

// Product Routes
Route::get('/',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/product/{product}', [ProductController::class, 'update'])->name('product.update');

// Auth and Session Routes
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
route::post('/login', [SessionController::class, 'store']);
route::get('/login', [SessionController::class, 'create'])->name('login');
route::post('/logout', [SessionController::class, 'destroy'])->name('logout');
