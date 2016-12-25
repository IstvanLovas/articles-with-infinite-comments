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

	/**
	 * Show the admin Dashboard.
	 * @return void
	 */
    public function dashboard()
    {
    	return view('admin.dashboard');
    }
}
