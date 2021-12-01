<?php

use App\Http\Controllers\CrewController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now  create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/articles', 'App\Http\Controllers\ArticleController@index')->name('articles.index');
Route::get('/articles/detail/{id}', 'App\Http\Controllers\ArticleController@detail')->name('articles.detail');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/detail/{id}', [ProductController::class, 'detail'])->name('products.detail');

Route::get('/crews', [CrewController::class, 'index'])->name('crews.index');
Route::get('/crews/detail/{id}', [CrewController::class, 'detail'])->name('crews.detail');


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
