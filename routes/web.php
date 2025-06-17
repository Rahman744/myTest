<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'home_page']);
Route::post('/start', [MyController::class, 'form']);
Route::get('/{id}', [MyController::class, 'pages']);