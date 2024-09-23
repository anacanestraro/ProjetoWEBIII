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