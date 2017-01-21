<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\PrivacyPolicyPageDetail;
use App\Http\Controllers\Controller;

class PrivacyPolicyPageDetailController extends Controller
{
    public function edit()
    {
    	$page = PrivacyPolicyPageDetail::first();

        return view('admin.privacy-policy',compact('page'));
    }

    public function update(Request $request)
    {
        $page = PrivacyPolicyPageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
