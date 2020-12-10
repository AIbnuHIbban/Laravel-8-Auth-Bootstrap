<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);

Auth::routes();
Auth::routes(['verify' => true]);

// Member
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::get('admin/{pages}', [App\Http\Controllers\AdminController::class, 'pages'])->middleware('auth');