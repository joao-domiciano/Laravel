<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EntregaController;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/entregas', [EntregaController::class, 'index']);

