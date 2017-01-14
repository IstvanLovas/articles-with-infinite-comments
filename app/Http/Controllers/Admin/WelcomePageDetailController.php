<?php

namespace App\Http\Controllers\Admin;

use App\WelcomePageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomePageDetailController extends Controller
{
    public function edit()
    {
    	$page = WelcomePageDetail::first();

        return view('admin.welcome',compact('page'));
    }

    public function update(Request $request)
    {
        $page = WelcomePageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
