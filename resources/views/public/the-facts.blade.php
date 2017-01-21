@extends('layouts.app')

@section('title')The facts @endsection
@section('meta_description')CQC is ... @endsection

@section('content')

<section id="the-facts">

	<masthead>
		<h1 slot="header">{{ $page->banner_header }}</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row id="why-this-matters">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->why_this_matters_header }}</h2>
				<h4>{{ $page->why_this_matters_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p class="lead">
							{!! nl2br($page->why_this_matters_lead) !!}
						</p>
						<p>
							{!! nl2br($page->why_this_matters_text_left) !!}
						</p>
					</div>
					
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->why_this_matters_text_right) !!}
						</p>
					</div>
				</div>
			</div>
		</template>
	</section-row>

	<div class="key-facts" id="key-facts">
		<div class="container-fluid">
			<div class="row">

				<div class="col-xs-12">
					<div class="flex-horizontal row">

						<div class="flex-vertical fact fact-1">
							<span class="number"><strong>{{ $page->key_fact_1_number }}</strong></span>
							<span class="fact-text">{{ $page->key_fact_1_header }}</span>
						</div>
						
						<div class="hidden-xs col-sm-4 fact"></div>
						
						<div class="flex-vertical fact fact-2">
							<span class="number"><strong>{{ $page->key_fact_2_number }}</strong></span>
							<span class="fact-text">{{ $page->key_fact_2_header }}</span>
						</div>

					</div>
				</div>

				<div class="col-xs-12">
					<div class="flex-horizontal row">

						<div class="hidden-xs col-sm-4 fact"></div>
						
						<div class="flex-vertical fact fact-3">
							<span class="number"><strong>{{ $page->key_fact_3_number }}</strong></span>
							<span class="fact-text">{{ $page->key_fact_3_header }}</span>
						</div>
						
						<div class="hidden-xs col-sm-4 fact"></div>

					</div>
				</div>

			</div>
		</div>

		<div class="triangle-wrapper">
			<div class="triangle"></div>
		</div>
	</div>

	<section-row class="our-progress" id="our-progress">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->our_progress_header }}</h2>
				<h4>{{ $page->our_progress_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<ul class="list-of-progress">
					<li>
						<div class="circle"></div>
						<span class="phase phase-1">
							{!! nl2br($page->our_progress_1_text) !!}
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="phase phase-2">
							{!! nl2br($page->our_progress_2_text) !!}
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="phase phase-3">
							{!! nl2br($page->our_progress_3_text) !!}
						</span>
					</li>

					<li>
						<div class="circle"></div>
						<span class="phase phase-4">
							{!! nl2br($page->our_progress_4_text) !!}
						</span>
					</li>
				</ul>
			</div>
		</template>
	</section-row>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<hr>
			</div>
		</div>
	</div>

	<section-row class="our-current-challenge">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->our_current_challenge_header }}</h2>
				<h4>{{ $page->our_current_challenge_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p class="lead">
							{!! nl2br($page->our_current_challenge_lead) !!}
						</p>

						<p>
							{!! nl2br($page->our_current_challenge_text_left) !!}
						</p>
					</div>
					
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->our_current_challenge_text_right) !!}
						</p>
					</div>
				</div>
			</div>
			<div class="triangle-wrapper">
				<div class="triangle"></div>
			</div>
		</template>
	</section-row>

	<section-row class="fact fact-1">
		<template slot="header">
			<div class="col-xs-12 section">
				<p class="lead">{{ $page->fact }} <br> <strong>{{ $page->fact_bold }}</strong></p>

				<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Learn more</a>
			</div>
		</template>
	</section-row>

	<section-row class="why-us" id="why-trust-us">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->why_us_header }}</h2>
				<h4>{{ $page->why_us_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-md-6 left">
						<p>
							{!! nl2br($page->why_us_text) !!}
						</p>
						
						<button class="btn btn-primary btn-large text-uppercase">Visit the HFCH website</button>
					</div>

					<div class="col-xs-12 col-md-6 right">
						<div class="list-box">
							<ul>
								<li>Key facts</li>
								<li>Info prove credibility</li>
								<li>For those short on time</li>
								<li>Prove credibility</li>
								<li>In 10 seconds</li>
							</ul>
						</div>

						<div class="img-holder">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="triangle-wrapper">
				<div class="triangle"></div>
			</div>
		</template>
	</section-row>

</section>

@endsection