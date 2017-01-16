<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function showTheFacts()
    {
    	return view('public.the-facts');
    }

    public function showMeetThoseAffected()
    {
    	return view('public.meet-those-affected');
    }
}
