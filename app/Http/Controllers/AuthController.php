<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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
            return redirect()->back();
        }

        $authUser = $this->findOrCreateUser($user);

        Auth()->login($authUser, true);

        return redirect()->route('dashboard');
    }

    public function findOrCreateUser($socialUser)
    {
        // get user account within our database
        $userAccount = User::where('email', $socialUser->getEmail())->first();

        if ($userAccount) {
            return $userAccount->user;
        } else {
            // create new user
            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail()
            ]);
            return $user;
        }
    }
}
