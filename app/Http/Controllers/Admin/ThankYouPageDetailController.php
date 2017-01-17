<?php

namespace App\Http\Controllers\Admin;

use App\ThankYouPageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThankYouPageDetailController extends Controller
{
    public function edit()
    {
    	$page = ThankYouPageDetail::first();

        return view('admin.thank-you',compact('page'));
    }

    public function update(Request $request)
    {
        $page = ThankYouPageDetail::first();

        $page->update($request->all());

        return $request->all();
    }
}
