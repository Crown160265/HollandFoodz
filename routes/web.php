<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [ProductController::class, 'home'])->name('home');
Route::get('/about', [ProductController::class, 'about'])->name('about');
Route::get('/salespoint', [ProductController::class, 'salespoints'])->name('salespoints');
Route::get('/salespoint/{title}', [ProductController::class, 'salespoint'])->name('salespoint');
Route::get('/contact', [ProductController::class, 'contact'])->name('contact');

Route::get('/collection/candy', [ProductController::class,'candy'])->name('candy');
Route::get('/collection/diary', [ProductController::class,'diary'])->name('diary');

Route::get('/products/{category}', [ProductController::class,'products'])->name('products');
Route::get('/product/{name}', [ProductController::class,'detail'])->name('product');
