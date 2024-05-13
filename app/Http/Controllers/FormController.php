<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        if (!request('form')) {
            return redirect()->route('dashboard');
        }

        return view('form-' . request('form'));
    }
}
