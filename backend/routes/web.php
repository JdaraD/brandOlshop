<?php

use App\Http\Controllers\CategoriesProductsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileWebsiteController;
use Illuminate\Support\Facades\Route;

Route::view('/login', 'Auth.login')->name('login');
Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/products', 'pages::products')->name('products');
Route::livewire('/categories', 'pages::categories')->name('categories');
Route::livewire('/transactions', 'pages::transactions')->name('transactions');
Route::livewire('/inbox', 'pages::inbox')->name('inboxs');
Route::livewire('/accounts', 'pages::accounts')->name('accounts');
Route::livewire('/profile-website', 'pages::profile-website')->name('profile-website');


Route::resource('categories-products', CategoriesProductsController::class);
Route::resource('products-controller', ProductsController::class);
Route::resource('profile-web', ProfileWebsiteController::class);