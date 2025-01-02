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

// --------------------------------
// ROUTE PARAMETERS
// --------------------------------

Route::get('/valor/{value}', [MainController::class,'mostrarValor'])->name('mostrarValor');
Route::get('/valores/{value1}/{value2}', [MainController::class,'mostrarValores'])->name('mostrarValores');

Route::get('/opcional/{value?}', [MainController::class, 'mostrarValorOpcional']);
Route::get('/opcional1/{value1}/{value2?}', [MainController::class, 'mostrarValorOpcional2']);

Route::get('/user/{user_id}/post/{post_id}', [MainController::class,'mostrarPosts'])->name('mostrarPosts');

// --------------------------------
// ROUTE PARAMETERS WITHG CONSTRAINTS
// --------------------------------

Route::get('/exp1/{value}', function($value) {
    echo $value;
})->where('value', '[0-9]+');

Route::get('/exp2/{value}', function($value) {
    echo $value;
})->where('value', '[A-Za-z0-9]+');

Route::get('/exp3/{value1}/{value2}', function($value) {
    echo $value;
})->where([
    'value1' => '[0-9]+',
    'value2' => '[A-za-z0-9]+'
]);
