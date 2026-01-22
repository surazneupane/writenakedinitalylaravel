<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/vipday', [HomeController::class, 'vipday'])->name('front.vipday');
Route::post('/contact', [HomeController::class, 'contact'])->name('front.contact');
