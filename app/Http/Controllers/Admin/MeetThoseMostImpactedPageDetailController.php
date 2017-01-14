<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\MeetThoseMostImpactedPageDetail;
use App\Http\Controllers\Controller;

class MeetThoseMostImpactedPageDetailController extends Controller
{
    public function edit()
    {
    	$page = MeetThoseMostImpactedPageDetail::first();

        return view('admin.meet-those-most-impacted',compact('page'));
    }

    public function update(Request $request)
    {
        $page = MeetThoseMostImpactedPageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
