<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LeverancierController;
use App\Http\Controllers\GeleverdeProductenController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/leveranciers', [LeverancierController::class, 'index']);
Route::get('/producten/{leverancier}', [ProductController::class, 'show'])->name('producten.show');

Route::get('/geleverde-producten', [GeleverdeProductenController::class, 'index'])->name('geleverdeProducten.index');
