<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [PublicController::class, 'mail'])->name('mail');
Route::get('/merch', [PublicController::class, 'merch'])->name('merch');
Route::get('/merch/{product}', [PublicController::class, 'merchdetail'])->name('merchdetail');
Route::get('/annetus', [PublicController::class, 'annetus'])->name('annetus');
