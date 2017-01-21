@extends('layouts.app')

@section('title')Meet those ost impacted @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="meet-those-most-impacted">
	<masthead>
		<h1 slot="header">{{ $page->banner_header }}</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row class="the-impact-is-huge">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->the_impact_is_huge_header }}</h2>
				<h4>{{ $page->the_impact_is_huge_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->the_impact_is_huge_text_left) !!}
						</p>
					</div>
					
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->the_impact_is_huge_text_right) !!}
						</p>
					</div>
				</div>
			</div>
		</template>
	</section-row>

	<div class="case-studies">
		@foreach($caseStudies as $caseStudy)
			<case-study>
				<h2 slot="case-header">{{ $caseStudy->header }}</h2>

				<p slot="quote">{!! nl2br($caseStudy->intro) !!}</p>
                <p slot="fact">{!! nl2br($caseStudy->fact) !!}</p>

				<button slot="button" class="btn btn-primary btn-large text-uppercase">Read Johns story</button>
			</case-study>
		@endforeach
	</div>

	<section-row class="fact fact-1">
		<template slot="header">
			<div class="col-xs-12 section">
				<p class="lead">{{ $page->fact }} <br> <strong>{{ $page->fact_bold }}</strong></p>

				<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Learn more</a>
			</div>
		</template>
	</section-row>

</section>
@endsection