<?php

use App\Http\Controllers\Frontend\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[WebsiteController::class,'index'])->name('website.home');
Route::get('/contact',[WebsiteController::class,'contact'])->name('website.contact');
Route::get('/about',[WebsiteController::class,'about'])->name('website.about');
Route::get('/products',[WebsiteController::class,'product'])->name('website.products');

