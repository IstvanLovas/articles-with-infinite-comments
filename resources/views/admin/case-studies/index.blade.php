@extends('layouts.admin')

@section('title')Case Studies @endsection

@section('content')
<section id="meet-those-most-impacted">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Case Studies <small>Index</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-fw fa-file"></i> Case Studies
                </li>
                <li class="active"> Index</li>
            </ol>
        </div>
    </div>

</section>
@endsection