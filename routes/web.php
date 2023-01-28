<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/category-products/{category_id}', [HomeController::class, 'category'])->name('category-product');
Route::get('/product-details/{id}', [HomeController::class, 'detail'])->name('product-details');


Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/dashboard', function () {
    if (Auth::user()->role == 'user') {
        return redirect()->route('welcome');
    } else if (Auth::user()->role == 'admin') {
        return view('user.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

// middleware(['auth]) makes sure we are logged in before accessing the route
Route::middleware(['auth', 'verified', 'admin'])->group(function () {


     Route::get('/add-category', [CategoryController::class, 'create'])->name('add-category');
     Route::post('/store-category', [CategoryController::class, 'store'])->name('category.store');

     Route::get('/add-product', [ProductController::class, 'create'])->name('add-product');
     Route::post('/store-product', [ProductController::class, 'store'])->name('product.store');
     Route::get('/all-products', [ProductController::class, 'show'])->name('all-products');
     Route::get('/edit-products/{product}', [ProductController::class, 'edit'])->name('edit-products');
     Route::post('/update-products/{product}', [ProductController::class, 'update'])->name('update-products');

});

require __DIR__.'/auth.php';
