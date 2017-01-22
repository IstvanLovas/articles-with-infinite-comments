<?php

namespace App\Http\Controllers\Admin;

use App\CaseStudyPhoto;
use Illuminate\Http\Request;

class CaseStudyPhotoController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $portfoliophoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseStudyPhoto $case_study_photo)
    {
    	$case_study_photo->delete();

        return response()->json([
            'success' => [
                'message' => 'You have successfully deleted the Case Study Photo!'
            ]
        ]);
    }
}
