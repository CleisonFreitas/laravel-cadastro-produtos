<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTagController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('welcome');
});



require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {
    // View Inicial
        Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    // Produtos
        Route::get('/product',                  [ProductController::class, 'index'])->name('produto.index');
        Route::get('/product/edit/{id}',        [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/update/{id}',      [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}',      [ProductController::class, 'delete'])->name('product.delete');

    // Tags
    Route::get('/tag',              [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/edit/{id}',    [TagController::class, 'edit'])->name('tag.edit');
    Route::get('/tag/update/{id}',  [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/delete/{id}',  [TagController::class, 'delete'])->name('tag.delete');

    // Product tag
    Route::get('/product_tag',              [ProductTagController::class, 'index'])->name('product_tag.index');
    Route::get('/product_tag/edit/{id}',    [ProductTagController::class, 'edit'])->name('product_tag.edit');
    Route::get('/product_tag/update/{id}',  [ProductTagController::class, 'update'])->name('product_tag.update');
    Route::get('/product_tag/delete/{id}',  [ProductTagController::class, 'delete'])->name('product_tag.delete');
});