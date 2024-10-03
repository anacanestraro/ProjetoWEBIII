<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', [TesteController::class, 'homePage']);

Route::get('/caes', [TesteController::class, 'caes']);

Route::get('/gatos', [TesteController::class, 'gatos']);

Route::get('/teste', [TesteController::class, 'teste']); // Exemplo convocando o controlador