<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Students;
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
        try {
            $user = Socialite::driver('azure')->user();
        } catch (Exception $e) {
            Session::flash('error', 'Akun tidak ditemukan.');
            return redirect()->back();
        }

        $student = Students::where('email', $user->getEmail())->first();

        if ($student) {
            $authUser = $this->findOrCreateUser($user);
            Auth::login($authUser);
            return redirect()->route('dashboard');
        } else {
            Session::flash('error', 'Data kamu tidak ditemukan');
            return redirect()->route('login');
        }
    }

    public function findOrCreateUser($socialUser)
    {
        $userAccount = User::where('email', $socialUser->getEmail())->first();

        if ($userAccount) {
            return $userAccount;
        } else {
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail()
            ]);

            $student = Students::where('email', $socialUser->getEmail())->first();
            $student->user_id = $user->id;
            $student->save();
            
            return $user;
        }
    }
}
