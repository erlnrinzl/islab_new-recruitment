<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class AdminRegistrantsController extends Controller
{
    public function index()
    {
        $registrants = StudentRegistration::all();

        return view('admin.registrations.index', compact('registrants'));
    }
}
