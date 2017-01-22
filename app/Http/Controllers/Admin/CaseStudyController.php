<?php

namespace App\Http\Controllers\Admin;

use App\CaseStudy;
use App\CaseStudyPhoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudyRequest;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

    public function addPhoto(Request $request, CaseStudy $case_study)
    {
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png'
        ]);
        
        $photo = $this->makePhoto($request->file('photo'));

        // Delete exisign photo from storage
        if($case_study->case_study_photo) {
            $case_study->case_study_photo->delete();
        }

        // Save and associate photo with Case Study
        $case_study->addPhoto($photo);

        return response()->json([
            'photo_path' => $photo->thumbnail_path,
            'id' => $case_study->id,
            'success' => [
                'message' => 'Photo uploaded.'
            ]
        ]);
    }

    protected function makePhoto(UploadedFile $file)
    {
        return CaseStudyPhoto::named($file->getClientOriginalName())
            ->move($file);
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
