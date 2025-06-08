<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Models\ContactMessage;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::get('/merch', [PublicController::class, 'merch'])->name('merch');
Route::get('/merch/{product}', [PublicController::class, 'merchdetail'])->name('merchdetail');
Route::get('/annetus', [PublicController::class, 'annetus'])->name('annetus');

Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    ContactMessage::create($request->only('name', 'email', 'message'));

    return back()->with('success', 'Sõnum on saadetud, võtame ühendust lähipäeval!');
})->name('contact.send');