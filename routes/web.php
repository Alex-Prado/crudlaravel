<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('contact.index');
});
Route::resource('contact', ContactController::class);
Route::post('contact', [ContactController::class, 'filtro'])->name('contact.filtro');

Route::resource('area', AreaController::class);

Route::controller(ContactController::class)->group(function () {
    Route::get('export/{dato?}', 'export')->name('export');
});
