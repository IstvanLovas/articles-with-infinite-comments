<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Socialite;
use App\Socialiteuser;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();   
    }   

    public function handleProviderCallback($provider)
    {
    	$user = Socialite::driver($provider)->user();

    	$authUser = $this->findOrCreateUser($user);
    	Auth::login($authUser,true);

    	return redirect('/');
    }

    public function findOrCreateUser($userData)
    {
        return User::firstOrCreate([
            'name' => $userData->name,
            'email' => $userData->email,
            'avatar' => $userData->avatar
        ]);
    }
}