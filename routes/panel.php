<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('panel.index');
});

Route::resource('/productos', ProductoController::class)->names('producto');
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');