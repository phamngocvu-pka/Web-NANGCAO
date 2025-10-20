<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    CatalogController,
    ProductController,
    CartController,
    OrderController,
    AccountController
};

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('c')->group(function () {
    Route::get('{slug}', [CatalogController::class, 'index'])->name('category');
});

Route::get('/p/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search', [CatalogController::class, 'search'])->name('search');

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/remove', [CartController::class, 'remove'])->name('cart.remove');
});

Route::middleware('auth')->group(function () {
    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/order', [OrderController::class, 'place'])->name('order.place');
    Route::get('/account', [AccountController::class, 'index'])->name('account');
});
// 👉 Route đăng nhập tạm thời (placeholder)
Route::get('/login', function () {
    return view('auth.login'); // hoặc chỉ return string tạm
})->name('login');