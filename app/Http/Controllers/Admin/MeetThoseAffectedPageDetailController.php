<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\MeetThoseAffectedPageDetail;
use App\Http\Controllers\Controller;

class MeetThoseAffectedPageDetailController extends Controller
{
    public function edit()
    {
    	$page = MeetThoseAffectedPageDetail::first();

        return view('admin.meet-those-affected',compact('page'));
    }

    public function update(Request $request)
    {
        $page = MeetThoseAffectedPageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
