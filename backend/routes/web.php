<?php

use App\Http\Controllers\CategoriesProductsController;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/products', 'pages::products')->name('products');
Route::livewire('/categories', 'pages::categories')->name('categories');
Route::livewire('/transactions', 'pages::transactions')->name('transactions');
Route::livewire('/inbox', 'pages::inbox')->name('inboxs');
Route::livewire('/accounts', 'pages::accounts')->name('accounts');
Route::livewire('/profile-website', 'pages::profile-website')->name('profile-website');


Route::resource('categories-products', CategoriesProductsController::class);