<?php

namespace App\Http\Controllers;

use App\Exports\RegistrantExport;
use App\Models\StudentRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminRegistrantsController extends Controller
{
    public function index()
    {
        $registrants = StudentRegistration::all();

        return view('admin.registrations.index', compact('registrants'));
    }

    public function export() 
    {
        return Excel::download(new RegistrantExport, 'Pendaftar '.Carbon::now().'.xlsx');
    }
}
