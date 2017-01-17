<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\TheFactsPageDetail;
use App\Http\Controllers\Controller;

class TheFactsPageDetailController extends Controller
{
    public function edit()
    {
    	$page = TheFactsPageDetail::first();

        return view('admin.the-facts',compact('page'));
    }

    public function update(Request $request)
    {
        $page = TheFactsPageDetail::first();

        $page->update($request->all());

        return $request->all();
    }
}
