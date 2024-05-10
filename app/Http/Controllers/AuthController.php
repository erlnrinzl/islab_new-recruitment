<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    public function redirect()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function callback()
    {
        $msUser = Socialite::driver('azure')->user();
        dd($msUser);
    }
}
