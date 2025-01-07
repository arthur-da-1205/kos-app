<?php

use App\Http\Controllers\BoardingHouseController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/city/{slug}', [CityController::class, 'show'])->name('city.show');

Route::get('/check-booking', [BookingController::class, 'check'])->name('check-booking');

Route::get('/find-boarding-house', [BoardingHouseController::class, 'find'])->name('find-boarding-house');
Route::get('/find-result', [BoardingHouseController::class, 'findResult'])->name('find-boarding-house.result');
