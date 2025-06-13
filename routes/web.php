<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;  // <-- вот тут важно!

Route::get('/', function () {
    return view('first');
});

Route::post('/start', function (Request $request) {
    $name = $request->input('name');

    if (!$name) {
        return redirect('/')->with('error', 'Введите имя');
    }

    session(['name' => $name]);

    return redirect('/1');
});

Route::get('/{id}', function ($id) {
    if (!is_numeric($id) || $id < 1 || $id > 5) {
        abort(404);
    }

    $name = session('name', 'Гость');
    return view('pages', compact('id', 'name'));
});
