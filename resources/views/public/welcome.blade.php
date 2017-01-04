@extends('layouts.app')

@section('title')Home @endsection
@section('meta_description')CQC is ... @endsection

@section('content')

<section id="home">
	<masthead>
		<h1 slot="header">Every life<br>matters</h1>
		<p class="lead" slot="text">Help us give the<br>gift of opportunity</p>
		<button slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</button>
	</masthead>

	<section-row class="over-1-million-people">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Over 1 million people... <br> illustrated key facts</h2>
			</div>
		</template>

		<template slot="body">
			<div class="triangle-wrapper">
				<div class="triangle"></div>
			</div>
		</template>
	</section-row>

	<section-row class="the-issue">
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
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>
					</div>
					
					<div class="col-sm-6">
						<p>tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum.tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo conse- quat. Duis autem vel eum.</p>
					</div>
				</div>

				<hr>
			</div>
		</template>
	</section-row>

	<section-row class="why-it-matters">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Why it matters</h2>
				<h4>Meet John</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					
					<div class="col-xs-12">
						<div class="row">
							<block-quote class="col-xs-12 col-md-6">
								<p slot="text">A asdwdsasa wdd s asd asdasdasd a asd a
								asd ssd asd wdsasawdd sasdad asd asdasdasd a asd a
								asd sad sa as ad</p>
							</block-quote>

							<div class="col-xs-12 col-md-3 facts">
								<p>IMPACT FACT ABOUT JOHN’S LIFE AND HOW AFFECTS HIM.</p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 nav-buttons">
								<ul>
									<li>
										<a href="/get-the-facts" class="text-uppercase" title="Link to Get the facts page">Get the facts</a>
									</li>
									<li>
										<a href="/meet-those-most-impacted" class="text-uppercase" title="Link to Meet those most impacted page">Meet those most impacted</a>
									</li>
									<li>
										<a href="/" class="text-uppercase" title="Link to Registration">Stay updated</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</template>
	</section-row>

	<section-row class="our-goals">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Our goals</h2>
				<h4>What we are going to do about it</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<ul class="list-of-goals">
					<li>
						<div class="circle"></div>
						<span class="goal goal-1">
							1. ASd ad asdasda  dasd ada
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="goal goal-2">
							2. ASd ad asdadsaad sadasd ada
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="goal goal-3">
							3. ASd asasddadasda  dasd ada
						</span>
					</li>

					<li>
						<a href="/">Learn more</a>
					</li>
				</ul>
			</div>
		</template>
	</section-row>

	<section-row class="people-affected">
		<template slot="header">
			<div class="col-xs-12">
				<h2>234,578 people are already involved.<br>Are You?</h2>
			</div>
		</template>
	</section-row>

	@include('partials.stay-updated-and-why')

	<section-row class="get-the-latest">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>Get the latest</h2>
				<h4>news, correspondence and updates</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12 list-latest-news">
				<div class="row">
					@foreach(App\Article::latest('published_at')->published()->take(3)->get() as $article)
						<div class="col-xs-12 col-sm-6 col-md-4 latest-news">
							<article>
								<div class="wrapper">
									<h3 class="title">{{ $article->title }}</h3>
									<div class="body-text">{{ $article->lead }}</div>
									<div class="cta-button text-center text-uppercase">
										<a href="/articles/{{ $article->id }}">Read Article</a>
									</div>
								</div>
							</article>
						</div>
					@endforeach
				</div>
			</div>

			<div class="col-xs-12 text-center text-uppercase">
				<a href="articles" title="Link to the latest news">Discover more news</a>
			</div>
		</template>
	</section-row>
</section>

@endsection