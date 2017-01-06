@extends('layouts.app')

@section('title')Meet those ost impacted @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="meet-those-most-impacted">
	<masthead>
		<h1 slot="header">Short key<br>Statements 2</h1>
		<button slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</button>
	</masthead>

	<div class="case-studies">	
		{{-- @foreach($caseStudies as $caseStudy) --}}
			<case-study>
				<h2 slot="case-header">Johns having to move</h2>
				<p slot="quote">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
				</p>
				<p slot="fact">IMPACT FACT ABOUT JOHN’S LIFE AND HOW AFFECTS HIM.</p>
				<button slot="button" class="btn btn-primary btn-large text-uppercase">Read Johns story</button>
		{{-- @endforeach --}}
	</div>

	<section-row class="the-issue">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>The impact is huge</h2>
				<h4>Can we prevent it?</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum.</p>
					</div>
					
					<div class="col-sm-6">
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Mae- cenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					</div>
				</div>
			</div>
		</template>
	</section-row>

	<section-row class="people-affected">
		<template slot="header">
			<div class="col-xs-12">
				<h2>Incredible fact about how important this issue is. <br class="hidden-xs hidden-sm">Don’t you want to hear more?</h2>
			</div>
		</template>
	</section-row>

	@include('partials.stay-updated-and-why')

</section>
@endsection