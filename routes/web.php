<?php

use App\Http\Controllers\User\ProductController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('user-products', ProductController::class);


});
