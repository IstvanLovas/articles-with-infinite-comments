<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	/**
     * Create a new Admin controller instance.
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function editWelcome()
    {
        return view('admin.welcome');
    }

    public function editGetTheFacts()
    {
        return view('admin.get-the-facts');
    }

    public function editMeetThoseMostImpacted()
    {
        return view('admin.meet-those-most-impacted');
    }
}
