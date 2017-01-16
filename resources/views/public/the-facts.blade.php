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

	<section-row class="the-issue" id="why-this-matters">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>The Issue</h2>
				<h4>Why we are campaigning</h4>
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

	<div class="key-facts" id="key-facts">
		<div class="container-fluid">
			<div class="row">

				<div class="col-xs-12">
					<div class="flex-horizontal row">

						<div class="flex-vertical fact fact-1">
							<span class="number">2346423</span>
							<span class="fact-text">Key facts goes here</span>
						</div>
						
						<div class="hidden-xs col-sm-4 fact"></div>
						
						<div class="flex-vertical fact fact-2">
							<span class="number">2346423</span>
							<span class="fact-text">Key facts goes here</span>
						</div>

					</div>
				</div>

				<div class="col-xs-12">
					<div class="flex-horizontal row">

						<div class="hidden-xs col-sm-4 fact"></div>
						
						<div class="flex-vertical fact fact-3">
							<span class="number">2346423</span>
							<span class="fact-text">Key facts goes here</span>
						</div>
						
						<div class="hidden-xs col-sm-4 fact"></div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<section-row class="our-aims" id="our-aims">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Our aims</h2>
				<h4>Goals and progress</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<ul class="list-of-aims">
					<li>
						<div class="circle"></div>
						<span class="aim aim-1">
							1. ASd ad asdasda  dasd ada
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="aim aim-2">
							2. ASd ad asdadsaad sadasd ada
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="aim aim-3">
							3. ASd asasddadasda  dasd ada
						</span>
					</li>

					<li>
						<div class="circle"></div>
						<span class="aim aim-4">
							4. ASd asasddadasda  dasd ada
						</span>
					</li>
				</ul>
			</div>
		</template>
	</section-row>

	<section-row class="the-issue our-current-challenge">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>OUR CURRENT CHALLENGE</h2>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>Lorem ipsum dolor sit amet, consec- tetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum.</p>
					</div>
					
					<div class="col-sm-6">
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Mae- cenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
					</div>
				</div>
			</div>
		</template>
	</section-row>

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

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-xs-12 col-md-6 left">
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum.</p>
						<p>Nullam quis risus eget urna mollis ornare vel eu leo. Mae- cenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						
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
		</template>
	</section-row>

</section>

@endsection