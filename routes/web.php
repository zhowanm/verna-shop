<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/search', SearchController::class)->name('search');

Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/admin', [DashboardController::class, 'index'])
    ->middleware('admin')
    ->name('admin.dashboard');

Route::resource('/admin/categories', CategoryController::class)
    ->middleware('admin')
    ->names('admin.categories');