<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('contact.index');
});
Route::resource('contact', ContactController::class);

Route::post('contact/filtro', [ContactController::class, 'filtro'])->name('contact.filtro');

Route::get('generarpdf',[ContactController::class,'generarPdf'])->name('generar-pdf');

Route::resource('area', AreaController::class);

Route::controller(ContactController::class)->group(function () {
    Route::get('export/{dato?}', 'export')->name('export');
    Route::post('contact.import', 'import')->name('contact-import');
});
