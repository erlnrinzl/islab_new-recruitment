<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Students;
use Illuminate\Http\Request;

class AdminUserDataController extends Controller
{
    public function index_admin()
    {
        $user_admin = Admin::all();

        return view('admin.userdata.admin', compact('user_admin'));
    }

    public function index_mahasiswa()
    {
        $user_mahasiswa = Students::orderBy('region_id')->orderBy('name')->get();

        return view('admin.userdata.mahasiswa', compact('user_mahasiswa'));
    }
}
