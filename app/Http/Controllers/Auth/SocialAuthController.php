<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Socialite;
use App\SocialAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirectToProvider($provider)
    {
        session()->put('url.intended', url()->previous());

        return Socialite::driver($provider)->redirect();   
    }   

    public function handleProviderCallback($provider)
    {
    	$user = Socialite::driver($provider)->user();

    	$authUser = $this->findOrCreateUser($user, $provider);

    	Auth::login($authUser,true);

    	$url = session()->get('url.intended', url('/'));

        session()->forget('url.intended');

        return redirect($url);
    }

    public function findOrCreateUser($userData, $provider)
    {
        $account = SocialAccount::whereProvider($provider)
                    ->whereProviderId($userData->id)
                    ->first();

        if($account)
        {
            return $account->user;
        }

        $user = User::firstOrCreate([
            'name' => $userData->name,
            'email' => $userData->email,
        ]);

        $account = new SocialAccount([
            'provider' => $provider,
            'provider_id' => $userData->id,
        ]);

        $account->user()->associate($user);

        $account->save();

        return $account->user;
    }
}