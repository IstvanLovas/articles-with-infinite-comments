@extends('layouts.app')

@section('title')Thank You @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="thank-you">
	<masthead>
		<h1 slot="header">{{ $page->banner_header }}</h1>
		<p class="lead" slot="text">{{ $page->banner_subheader }}</p>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row class="fact fact-1">
		<template slot="header">
			<div class="col-xs-12 section">
				<p class="lead">Did you know, <strong>you just joined 4,678 others who want to learn more.</strong></p>
			</div>
		</template>
	</section-row>

	<section-row class="but-it-does-not-stop-there">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->but_it_does_not_stop_there_header }}</h2>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>
							{!! nl2br($page->but_it_does_not_stop_there_sign) !!}
						</p>

						<p>
							{!! nl2br($page->but_it_does_not_stop_there_text) !!}
						</p>

						<p>
							<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">
							Goverment Petition
							</a>
						</p>

						<join-the-conversation></join-the-conversation>
					</div>
					
					<div class="col-sm-6">
						<p>
							3. SHARE THE CAMPAIGN WITH A FRIEND
						</p>

						<div class="form">
							<form>
								<div class="form-group">
									<input type="text" placeholder="Friend's name" name="name">
								</div>
								<div class="form-group">
									<input type="email" placeholder="Email" name="name">
								</div>
								<div class="form-group">
									<textarea placeholder="Your message of support" name="message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Send">
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</template>
	</section-row>
</section>
@endsection