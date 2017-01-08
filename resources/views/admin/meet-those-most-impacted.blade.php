@extends('layouts.admin')

@section('title')Meet those most impacted page @endsection

@section('content')
	<!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pages <small>Meet those most impacted</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-fw fa-file"></i> Pages
                </li>
                <li class="active"> Meet those most impacted</li>
            </ol>
        </div>
    </div>
@endsection