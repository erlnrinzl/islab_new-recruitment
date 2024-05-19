<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        if (!request('form')) {
            return redirect()->route('dashboard');
        }

        return view('form-' . request('form'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'studentId' => 'required|max:10',
            'name' => 'required',
            'email' => 'required',
            'region' => 'required',
            'jurusan' => 'required',
            'period' => 'required',
            'role' => 'required',

        ]);

        $validatedData['statusId'] = null;
    }
}
