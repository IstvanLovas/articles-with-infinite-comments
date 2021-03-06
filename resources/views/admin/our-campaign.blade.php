@extends('layouts.admin')

@section('title')Our Campaign page @endsection

@section('content')
	<section id="welcome">
	    <div class="row">
	        <div class="col-lg-12">
	            <h1 class="page-header">
	                Pages <small>Our Campaign</small>
	            </h1>
	            <ol class="breadcrumb">
	                <li>
	                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
	                </li>
	                <li>
	                    <i class="fa fa-file" aria-hidden="true"></i> Pages
	                </li>
	                <li class="active"> Our Campaign</li>
	            </ol>
	        </div>
	    </div>
	
	    <div class="row">
	    	<div class="col-sm-12">
				<div class="page-header">
			        <h2>Banner<h2>
			    </div>

	            <banner
	            	:patch-link="'our-campaign'"
	            	:banner-header="{{ json_encode($page->banner_header) }}"
	            	:banner-subheader="{{ json_encode($page->banner_subheader) }}"
	           	></banner>

	        </div>
	    </div>

 	    <div class="row">
	    	<div class="col-sm-12">
				<div class="page-header">
			        <h2>Fact<h2>
			    </div>

	            <fact 	:patch-link="'our-campaign'"
	            		:fact="{{ json_encode($page->fact) }}"
	            		:fact-bold="{{ json_encode($page->fact_bold) }}"
	            ></fact>

	        </div>
	    </div>

	    <div class="row">
	    	<div class="col-sm-12">
	    	
	    		<div class="page-header">
			        <h2>The Issue<h2>
			    </div>

	            <the-issue
	            	:patch-link="'our-campaign'"
            		:the-issue-header="{{ json_encode($page->the_issue_header) }}"
            		:the-issue-subheader="{{ json_encode($page->the_issue_subheader) }}"
            		:the-issue-text-left="{{ json_encode($page->the_issue_text_left) }}"
            		:the-issue-text-right="{{ json_encode($page->the_issue_text_right) }}"
	            ></the-issue>

	        </div>
	    </div>

	    <div class="row">
	    	<div class="col-sm-12">
				<div class="page-header">
			        <h2>Why it matters<h2>
			    </div>

	            <why-it-matters
	            	:patch-link="'our-campaign'"
            		:why-it-matters-header="{{ json_encode($page->why_it_matters_header) }}"
            		:why-it-matters-subheader="{{ json_encode($page->why_it_matters_subheader) }}"
            		:why-it-matters-text="{{ json_encode($page->why_it_matters_text) }}"
            		:why-it-matters-fact="{{ json_encode($page->why_it_matters_fact) }}"
	            ></why-it-matters>

	        </div>
	    </div>

	    <div class="row">
	    	<div class="col-sm-12">
				<div class="page-header">
			        <h2>Our Goals<h2>
			    </div>

	            <our-goals
	            	:patch-link="'our-campaign'"
	           		:our-goals-header="{{ json_encode($page->our_goals_header) }}"
	            	:our-goals-subheader="{{ json_encode($page->our_goals_subheader) }}"
	            	:our-goals-goal1="{{ json_encode($page->our_goals_goal_1) }}"
	            	:our-goals-goal2="{{ json_encode($page->our_goals_goal_2) }}"
	            	:our-goals-goal3="{{ json_encode($page->our_goals_goal_3) }}"
	           	></our-goals>

	        </div>
	    </div>

	</section>
@endsection