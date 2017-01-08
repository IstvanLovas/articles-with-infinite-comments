<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();   
    }   

    public function handleProviderCallback()
    {
    	$user = Socialite::driver('facebook')->user();
    	try {
    		$user = Socialite::driver('facebook')->user();
    	} catch (Exception $e) {
    		return redirect('auth/facebook');
    	}

    	$authUser = $this->findOrCreate($user);

    	Auth::login($authUser,true);

    	return redirect('/account');
    }
}