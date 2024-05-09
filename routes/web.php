<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\ServiceController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\backend\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/service', [ServiceController::class, 'service']);

//Backend 
Route::group(['prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
    Route::get('/', [LoginController::class, 'login'])->name('backend.login');
    Route::get('product', [ProductController::class, 'product'])->name('backend.product');
});
