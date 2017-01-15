<?php

namespace App\Http\Controllers\Admin;

use App\CaseStudy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudyRequest;

class CaseStudyController extends Controller
{
    /**
     * Show the index of Case Studies.
     * @return Response
     */
    public function index()
    {
        $caseStudies = CaseStudy::latest()->paginate(6);

        return view('admin.case-studies.index', compact('caseStudies'));
    }

    /**
     * Show Create a Case Study Form.
     * @return Response
     */
    public function create()
    {
        return view('admin.case-studies.create', compact('caseStudies'));
    }

    public function store(CaseStudyRequest $request)
    {
        $caseStudy = CaseStudy::create($request->all());

        return $caseStudy;
    }
}
