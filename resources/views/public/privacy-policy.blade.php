@extends('layouts.app')

@section('title')Privacy policy @endsection
@section('meta_description')Privacy policy @endsection

@section('content')
<section id="privacy-policy">
	<masthead>
		<h1 slot="header">{{ $page->banner_header }}</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row class="privacy-policy">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->privacy_policy_header }}</h2>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->privacy_policy_text_left) !!}
						</p>
					</div>
					
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->privacy_policy_text_right) !!}
						</p>
					</div>
				</div>
			</div>
		</template>
	</section-row>
</section>
@endsection