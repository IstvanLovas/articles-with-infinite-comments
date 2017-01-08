@extends('layouts.admin')

@section('title')Welcome page @endsection

@section('content')
	<section id="welcome">
		<!-- Page Heading -->
	    <div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header">
	                Pages <small>Welcome</small>
	            </h1>
	            <ol class="breadcrumb">
	                <li>
	                    <i class="fa fa-dashboard"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
	                </li>
	                <li>
	                    <i class="fa fa-fw fa-file"></i> Pages
	                </li>
	                <li class="active"> Welcome</li>
	            </ol>
	        </div>
	    </div>
	
	    <div class="row">
	    	<div class="col-sm-12">
				<div class="page-header">
			        <h2>Banner<h2>
			    </div>

	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <h3 class="panel-title">Banner title</h3>
	                </div>
	                <div class="panel-body">
	                    Banner content
	                </div>
	            </div>
	            
	        </div>
	    </div>
	</section>
@endsection

@section('customJS')
	<script src="/js/admin/welcome.js"></script>
@endsection