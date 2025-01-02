<?php

use App\Http\Controllers\MainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// assinatura base de uma rota
// Route::verb('uri', callback); - o callback é a ação que vai ser executada quando a rota for acionada

// rota com função anônima
Route::get("/rota", function() {
    return '<h1>Olá mundo</h1>';
});

Route::get("/injection", function(Request $request) {
    var_dump($request);
});

Route::match(['get', 'post'],"/match", function(Request $request) {
    return '<h1>Aceita get e post</h1>';
});

Route::any("/any", function(Request $request) {
    return '<h1>Aceita qualquer http verb</h1>';
});

Route::get('/index', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::redirect('/saltar', '/index');
Route::permanentRedirect('saltar2', 'index');

Route::view('/view', 'home');
Route::view('/view2', 'home', ['myName' => 'Matheus Araujo']);