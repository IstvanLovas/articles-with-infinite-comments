<?php

namespace App\Http\Controllers\Admin;

use App\OurCampaignPageDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurCampaignPageDetailController extends Controller
{
    public function edit()
    {
    	$page = OurCampaignPageDetail::first();

        return view('admin.our-campaign',compact('page'));
    }

    public function update(Request $request)
    {
        $page = OurCampaignPageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
