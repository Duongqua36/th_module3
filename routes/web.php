<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [ProductController::class, 'index'])->name('product.list');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/create', [ProductController::class, 'store'])->name('product.store');
Route::post('/search', [ProductController::class, 'search'])->name('product.search');


