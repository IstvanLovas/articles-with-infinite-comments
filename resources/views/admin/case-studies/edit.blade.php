@extends('layouts.admin')

@section('title')Edit Case Study @endsection

@section('content')
<section id="edit-meet-those-most-impacted">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Case Studies <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-file" aria-hidden="true"></i> <a href="{{ route('case-study-index') }}">Case Studies</a>
                </li>
                <li class="active"> Edit</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                @if($case_study->case_study_photo)
                    <div class="col-xs-6">
                        <case-study-photo
                            :photo-path="{{ json_encode($case_study->case_study_photo->thumbnail_path) }}"
                        >
                        </case-study-photo>
                    </div>
                @endif

                <div class="col-xs-{{ $case_study->case_study_photo ? '6' : '12' }}">
                    <case-study-photo-upload-form 
                        :case-id="{{ $case_study->id }}"
                    >
                    </case-study-photo-upload-form>
                </div>

            </div>
        </div>
        <div class="col-xs-12">
            <edit-case-study-form :case-study="{{ $case_study }}"></edit-case-study-form>
        </div>
    </div>
</section>
@endsection