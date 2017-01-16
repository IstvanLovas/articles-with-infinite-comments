<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\GetTheFactsPageDetail;
use App\Http\Controllers\Controller;

class GetTheFactsPageDetailController extends Controller
{
    public function edit()
    {
    	$page = GetTheFactsPageDetail::first();

        return view('admin.the-facts',compact('page'));
    }

    public function update(Request $request)
    {
        $page = GetTheFactsPageDetail::first();

        $page->update($request->all());

        return $request->all();

    }
}
