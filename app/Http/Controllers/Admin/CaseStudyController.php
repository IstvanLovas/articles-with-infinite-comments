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
        return view('admin.case-studies.create');
    }

    /**
     * Edit Case Study.
     * @param  CaseStudy $caseStudy
     * @return Response
     */
    public function edit(CaseStudy $case_study)
    {
        return view('admin.case-studies.edit', compact('case_study'));
    }

    /**
     * Update specified resource.
     * @param  CaseStudy $case_study
     * @param  CaseStudyRequest $request
     * @return Response
     */
    public function update(CaseStudy $case_study, CaseStudyRequest $request)
    {
        $case_study->update($request->all());

        return response()->json([
            'success' => [
                'message' => 'You have successfully updated the Case Study.'
            ]
        ]);
    }

    public function store(CaseStudyRequest $request)
    {
        $case_study = CaseStudy::create($request->all());

        return response()->json([
            'id' => $case_study->id,
            'success' => [
                'message' => 'You have successfully created a new Case Study.'
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  CaseStudy $case_study
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseStudy $case_study)
    {
        $case_study->delete();

        return redirect()->route('case-study-index');
    }
}
