<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('frontend/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::get('/category', [AdminController::class, 'category'])->name('category');
    Route::get('/customer', [AdminController::class, 'customer'])->name('customer');
    Route::get('/products', [AdminController::class, 'product'])->name('product');
    Route::get('/create-sale', [AdminController::class, 'createSale'])->name('createSale');
    Route::get('/invoice', [AdminController::class, 'invoice'])->name('invoice');
});