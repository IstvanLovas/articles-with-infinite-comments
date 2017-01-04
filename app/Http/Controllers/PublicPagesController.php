<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function showGetTheFacts()
    {
    	return view('public.get-the-facts');
    }

    public function showMeetThoseMostImpacted()
    {
    	return view('public.meet-those-most-impacted');
    }
}
