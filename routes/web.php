<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class,'initMethod'])->name('init');
Route::get('/view', [MainController::class,'viewPage'])->name('view');