<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('front.home');
Route::get('/{page}', [HomeController::class, 'index'])->name('front.home.page');
Route::post('/contact', [HomeController::class, 'contact'])->name('front.contact');
Route::post('/download/activation', [HomeController::class, 'downloadActivation'])->name('front.download.activation');
Route::post('/download/meditation', [HomeController::class, 'downloadMeditaion'])->name('front.download.sleepmeditation');
