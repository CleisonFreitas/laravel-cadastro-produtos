<?php

use App\Http\Controllers\DashboardController;
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

/*Route::get('/', function () {
    return view('auth.login');
});*/

require __DIR__.'/auth.php';


Route::middleware(['auth'])->group(function () {


    // Dashboard
        Route::get('/',          [DashboardController::class, 'index'])->name('dashboard');
    //    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Produtos
        Route::get('/product',                          [ProductController::class, 'index'])->name('product.index');
        Route::post('/product/store',                   [ProductController::class , 'store'])->name('product.store');
        Route::get('/product/show',                     [ProductController::class, 'show'])->name('product.show');
        Route::get('/product/edit/{id}',                [ProductController::class, 'edit'])->name('product.edit');
        Route::put('/product/update/{id}',              [ProductController::class, 'update'])->name('product.update');
        Route::get('/product/delete/{id}',              [ProductController::class, 'destroy'])->name('product.delete');

    // Tags
    Route::get('/tag',              [TagController::class, 'index'])->name('tag.index');
    Route::post('tag/store',        [TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/show',         [TagController::class, 'show'])->name('tag.show');
    Route::get('/tag/edit/{id}',    [TagController::class, 'edit'])->name('tag.edit');
    Route::put('/tag/update/{id}',  [TagController::class, 'update'])->name('tag.update');
    Route::get('/tag/delete/{id}',  [TagController::class, 'destroy'])->name('tag.delete');

    // Product tag
    Route::get('/product_tag',              [ProductTagController::class, 'index'])->name('product_tag.index');

    Route::get('/product_tag/pdf',          [ProductTagController::class, 'viewpdf'])->name('product_tag.pdf');
});
