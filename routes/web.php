<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('first');
});

Route::get('/{id}', function ($id) {
    return view('pages', compact('id'));
});