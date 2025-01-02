<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/teste/{value}', [MainController::class, 'teste']);