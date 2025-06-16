<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('first');
});

Route::post('/start', function () {
    session(['name' => request('name')]);
    return redirect('/1');
});

Route::get('/{id}', function ($id) {
    $name = session('name');
    return view('pages', compact('id', 'name'));
});

