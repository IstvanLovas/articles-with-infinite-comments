<?php

namespace App\Http\Controllers;

use App\ThankYouPageDetail;
use App\TheFactsPageDetail;
use Illuminate\Http\Request;
use App\OurCampaignPageDetail;
use App\MeetThoseAffectedPageDetail;

class PublicPagesController extends Controller
{
    public function showOurCampaign()
    {
            // \App\Tag::create(['name' => 'law']);
            // \App\Tag::create(['name' => 'discussion']);
            // \App\Tag::create(['name' => 'person']);
            // \App\Tag::create(['name' => 'other']);
            // \App\Role::create(['name' => 'admin']);
         //    $role = \App\Role::whereName('admin')->first();
         //    $user = \App\User::create([
         //     'name' => 'Istvan Lovas',
         //     'email' => 'loleves@gmail.com',
         //     'password' => Hash::make('jujuka')
         //    ]);
         //    $user = \App\User::where('email', 'loleves@gmail.com')->first();
         //    $user->roles()->attach($role);
         //    return \App\User::with('roles')->find(1);

    	$page = OurCampaignPageDetail::first();

        return view('public.our-campaign',compact('page'));
    }

    public function showTheFacts()
    {
        $page = TheFactsPageDetail::first();

        return view('public.the-facts',compact('page'));
    }

    public function showMeetThoseAffected()
    {
    	$page = MeetThoseAffectedPageDetail::first();

        return view('public.meet-those-affected',compact('page'));
    }

    public function showThankYou()
    {
    	$page = ThankYouPageDetail::first();

        return view('public.thank-you',compact('page'));
    }
}
