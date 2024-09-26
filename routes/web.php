<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homePage');
});

Route::get('/caes', function () {
    return view('caes');
});

Route::get('/gatos', function(){
    return view('gatos');
});

Route::get('/teste', function () {

    $produto = 'maçã';
    $valor = 12.20;

    return view('teste' , compact('produto','valor'));
    
    });
