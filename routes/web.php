<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('first');
});

Route::post('/start', function (Request $request) {
    $name = $request->input('name');
    $code = $request->input('code');

    if ($code !== '1234') {
        return redirect('/')
            ->with('error', 'Wrong code!')
            ->withInput();
    }

    session(['name' => $name]);
    session(['access_granted' => true]);
    return redirect('/1');
});


Route::get('/{id}', function ($id) {
    $name = session('name');
    return view('pages', compact('id', 'name'));
});

