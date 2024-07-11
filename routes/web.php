<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware("auth")->prefix('admin')->group(function (){
    Route::get('/', function () {return view('index');})->name('dashboard');
    Route::resource('/Category', CategoriesController::class);
    Route::resource('/Supplier', SupplierController::class);
    Route::resource('/Stock', StockController::class);
    Route::resource('/Product', ProductController::class);
    Route::resource('/Customer', CustomerController::class);
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
