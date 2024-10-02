<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\UserController;


use App\Models\User;
use Illuminate\Support\Facades\Route;

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

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-sach', [BookController::class, 'index'])->name('book.list');
Route::get('/chi-tiet/{id}', action: [BookController::class, 'show'])->name('book.detail');

Route::get('/danh-muc/{id}/{name}', [BookController::class, 'category'])->name('book.category');

