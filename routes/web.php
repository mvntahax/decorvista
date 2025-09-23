<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SavedDesignController;
use Illuminate\Support\Facades\Route;

/* ---------------------- Guest Pages ---------------------- */
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/* ---------------------- Public Pages ---------------------- */
// Designs
Route::get('/designs', [DesignController::class, 'index'])->name('designs');
Route::get('/designs/{slug}', [DesignController::class, 'byCategory'])->name('designs.byCategory');

// Products
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/{slug}', [ProductController::class, 'byCategory'])->name('products.byCategory');

// Static pages
Route::get('/blogs', fn() => view('blogs'));
Route::get('/reviews', fn() => view('reviews'));
Route::get('/product-detail', fn() => view('product-detail'));

// User placeholder routes (fallback views when not logged in)
Route::get('/user/cart', fn() => view('users.cart'))->name('users.cart');
Route::get('/user/profile', fn() => view('users.profile'))->name('users.profile');

// Designers
Route::get('/designer-detail/{username}', [DesignerController::class, 'show'])->name('designer-detail');

/* ---------------------- Authenticated Routes ---------------------- */
Route::middleware('auth')->group(function () {
    // Cart routes
    Route::get('/user/cart', [CartController::class, 'index'])->name('users.cart');
    Route::post('/user/cart/{cart}', [CartController::class, 'store'])->name('users.cart.store');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('users.cart.update');
    Route::delete('/user/cart/{id}', [CartController::class, 'destroy'])->name('users.cart.destroy');

    // Saved designs routes
    Route::get('/user/saved-designs', [SavedDesignController::class, 'index'])->name('users.saved-designs');
    Route::post('/saved-designs/{design}', [SavedDesignController::class, 'store'])->name('users.saved-designs.store');
    Route::delete('/user/saved-designs/{id}', [SavedDesignController::class, 'destroy'])->name('users.saved-designs.destroy');

    // Consultations routes
    Route::get('/user/consultations', [ConsultationController::class, 'index'])->name('users.consultations');
    Route::delete('/user/consultations/{id}', [ConsultationController::class, 'destroy'])->name('users.consultations.destroy');
    Route::get('{username}/book-consultation', [ConsultationController::class, 'create'])->name('book-consultation');
    Route::post('/book-consultation', [ConsultationController::class, 'store'])->name('book-consultation.store');

    // Profile routes
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('users.profile');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('users.profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
