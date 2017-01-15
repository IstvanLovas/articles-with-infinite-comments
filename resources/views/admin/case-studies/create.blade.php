@extends('layouts.admin')

@section('title')Case Studies @endsection

@section('content')
<section id="meet-those-most-impacted">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Case Studies <small>Add new</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-fw fa-file"></i> Case Studies
                </li>
                <li class="active"> Add new</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <create-case-study-form></create-case-study-form>
        </div>
    </div>
</section>
@endsection