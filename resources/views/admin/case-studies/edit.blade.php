@extends('layouts.admin')

@section('title')Edit Case Study @endsection

@section('content')
<section id="meet-those-most-impacted">
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
        <div class="col-sm-12">
            <edit-case-study-form :case-study="{{ $case_study }}"></edit-case-study-form>
        </div>
    </div>
</section>
@endsection