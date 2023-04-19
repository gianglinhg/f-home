<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\CheckoutController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;

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

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contact', [MainController::class, 'contact'])->name('contact');
Route::post('store-contact', [MainController::class, 'storContact'])->name('store-contact');
Route::get('shop', [ShopController::class, 'shop'])->name('shop');
Route::get('shop/{slug}.html', [ShopController::class, 'product'])->name('product.detail');
Route::post('filter', [ShopController::class, 'filter'])->name('filter');
Route::get('checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('store-order', [CheckoutController::class, 'storeOrder'])->name('store.order');
Route::post('vnpay', [CheckoutController::class, 'vnpay'])->name('vnpay');
Route::get('store-vnpay', [CheckoutController::class, 'storeVnpay'])->name('store.vnpay');
//cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('store-cart', [CartController::class, 'storeCart'])->name('store-cart');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('update-cart');
Route::post('delete-cart', [CartController::class, 'deleteCart'])->name('delete-cart');


//Admin
Route::get('admin', [AdminController::class, 'dashboard'])->name('dashboard');

Route::controller(ProductController::class)->prefix('product')->group(function () {
    Route::get('', 'index')->name('product');
    Route::get('add', 'add')->name('product.add');
    Route::post('add', 'save')->name('product.save');
    Route::get('edit/{id}', 'edit')->name('product.edit');
    Route::post('edit/{id}', 'update')->name('product.update');
    Route::get('delete/{id}', 'delete')->name('product.delete');
});

Route::controller(CategoryController::class)->prefix('category')->group(function () {
    Route::get('', 'index')->name('category');
    Route::get('add', 'add')->name('category.add');
    Route::post('save', 'save')->name('category.save');
    Route::get('edit/{id}', 'edit')->name('category.edit');
    Route::post('edit/{id}', 'update')->name('category.update');
    Route::get('delete/{id}', 'delete')->name('category.delete');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';