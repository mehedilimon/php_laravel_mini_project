<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {

    return redirect('/dashboard', 302);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/settings', 'SettingsController@index');
});
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

