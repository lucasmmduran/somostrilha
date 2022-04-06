<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::view('nosotros', 'pages.about_us.index')->name('nosotros');
Route::get('productos/{product}', [App\Http\Controllers\ProductController::class, 'show']);
Route::view('gracias', 'pages.gracias.index')->name('gracias');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
});

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */
