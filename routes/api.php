<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AgencyController;
use App\Http\Controllers\API\ProductController;

Route::get('/agencies', [AgencyController::class, 'index']);
Route::get('/agencies/{id}', [AgencyController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
