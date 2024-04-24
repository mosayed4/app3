<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.layouts.home');
});
Route::get('/about', function () {
    return view('main.layouts.about');
});
Route::get('/services', function () {
    return view('main.layouts.services');
});
Route::get('/servicesdetails', function () {
    return view('main.layouts.servicesdetails');
});
Route::get('/contact', function () {
    return view('main.layouts.contact');
});
Route::get('/gallery', function () {
    return view('main.layouts.gallery');
});
Route::post('/addNewAppmint',[ContactController::class,'addNewAppmint']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
