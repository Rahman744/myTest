<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home_page()
    {
        return view('first');
    }

    public function form(Request $request)
    {
        $name = $request->input('name');
        $code = $request->input('code');
        $email = $request->input('email');

        if ($code !== '1234') {
            return redirect('/')
                ->with('error', 'Wrong code!')
                ->withInput();
        }

        session(['name' => $name]);
        session(['access' => true]);
        return redirect('/1');
    }

    public function pages($id)
    {
        $name = session('name');
        return view('pages', compact('id', 'name'));
    }
}
