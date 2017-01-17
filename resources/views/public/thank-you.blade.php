@extends('layouts.app')

@section('title')The facts @endsection
@section('meta_description')CQC is ... @endsection

@section('content')

<section id="get-the-facts">

	<masthead>
		<h1 slot="header">Every life<br>matters</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row class="some-fact">
		<template slot="header">
			<div class="col-xs-12">
				<h2>This issue affects over 10,000 people. <br class="hidden-xs hidden-sm">Don’t you want to hear more?</h2>
			</div>
		</template>
	</section-row>

	@include('partials.stay-updated-and-why')

	<section-row class="why-us" id="why-trust-us">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Why us?</h2>
				<h4>The de savary family</h4>
			</div>
		</template>
	</section-row>

</section>

@endsection