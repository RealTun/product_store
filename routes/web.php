<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CartController::class, 'index'])->name('home');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');

Route::prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.home.index');

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('admin.products.index');

        Route::get('create', [ProductController::class, 'create'])->name('admin.products.create');

        Route::post('store', [ProductController::class, 'store'])->name('admin.products.store');

        Route::get('edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');

        Route::put('update/{id}', [ProductController::class, 'update'])->name('admin.products.update');

        Route::get('delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');
    });

    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('admin.orders.index');

        Route::post('store', [OrderController::class, 'store'])->name('admin.orders.store');

        Route::get('show/{id}', [OrderController::class, 'show'])->name('admin.orders.show');

        Route::get('delete/{id}', [OrderController::class, 'delete'])->name('admin.orders.delete');
    });
});