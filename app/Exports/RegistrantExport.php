<?php

namespace App\Exports;

use App\Models\StudentRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;

class RegistrantExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentRegistration::all();
    }
}
