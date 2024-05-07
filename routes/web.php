<?php

use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\ContactController;
use App\Http\Controllers\FrontEnd\ServiceController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/service', [ServiceController::class, 'service']);

//Backend 
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
});
