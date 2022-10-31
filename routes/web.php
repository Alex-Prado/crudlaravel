<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('contact.index');
});
Route::resource('contact', ContactController::class);

Route::resource('area', AreaController::class);
