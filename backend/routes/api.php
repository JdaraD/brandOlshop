<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileWebsiteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// get data profile website
Route::get('/profile-website', [ProfileWebsiteController::class,'index']);
Route::get('/products', [ProductsController::class,'index']);