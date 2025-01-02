<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/init', [MainController::class,'initMethod'])->name('init');
Route::get('/view', [MainController::class,'viewPage'])->name('view');

// route para controller single action
Route::get('/single', SingleActionController::class)->name('single');

// route para controller do tipo resource
// Route::resource('users', UserController::class);
Route::resources([
    'users' => UserController::class,
    'clients' => ClientsController::class,
    'products' => ProductsController::class,
]);