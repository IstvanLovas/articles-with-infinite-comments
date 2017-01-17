@extends('layouts.app')

@section('title')Our Campaign @endsection
@section('meta_description')CQC is ... @endsection

@section('content')

<section id="home">

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
				<p class="lead">{{ $page->fact }} <br> <strong>{{ $page->fact_bold }}</strong></p>

				<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Learn more</a>
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
				<h2>{{ $page->the_issue_header }}</h2>
				<h4>{{ $page->the_issue_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-6">
						<p>{!! nl2br($page->the_issue_text_left) !!}</p>
					</div>
					
					<div class="col-sm-6">
						<p>{!! nl2br($page->the_issue_text_right) !!}</p>
					</div>
				</div>

				<hr>
			</div>
		</template>
	</section-row>

	<section-row class="why-it-matters">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->why_it_matters_header }}</h2>
				<h4>{{ $page->why_it_matters_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					
					<div class="col-xs-12">
						<div class="row">
							<block-quote class="col-xs-12 col-md-6">
								<p slot="text">{!! nl2br($page->why_it_matters_text) !!}</p>
							</block-quote>

							<div class="col-xs-12 col-md-3 facts">
								<p>{{ $page->why_it_matters_fact }}</p>
							</div>
						</div>

						<div class="row">
							<div class="col-xs-12 nav-buttons">
								<ul>
									<li>
										<a href="/the-facts" class="text-uppercase" title="Link to Get the facts page">Get the facts</a>
									</li>
									<li>
										<a href="/meet-those-affected" class="text-uppercase" title="Link to Meet those most impacted page">Meet those most impacted</a>
									</li>
									<li>
										<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="triangle-wrapper">
				<div class="triangle"></div>
			</div>
		</template>
	</section-row>

	<section-row class="our-goals">
		<template slot="header">
			<div class="col-xs-12 section">
				<h2>{{ $page->our_goals_header }}</h2>
				<h4>{{ $page->our_goals_subheader }}</h4>
			</div>
		</template>

		<template slot="body">
			<div class="col-xs-12">
				<ul class="list-of-goals">
					<li>
						<div class="circle"></div>
						<span class="goal goal-1">
							{{ $page->our_goals_goal_1 }}
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="goal goal-2">
							{{ $page->our_goals_goal_2 }}
						</span>
					</li>
					<li>
						<div class="circle"></div>
						<span class="goal goal-3">
							{{ $page->our_goals_goal_3 }}
						</span>
					</li>

					<li>
						<div class="circle"></div>
						<span class="goal goal-4">
							{{ $page->our_goals_goal_4 }}
						</span>
					</li>

					<li>
						<a href="/the-facts" title="Link to Get The Facts page">Learn more</a>
					</li>
				</ul>
			</div>
			<div class="triangle-wrapper">
				<div class="triangle"></div>
			</div>
		</template>
	</section-row>

	<section-row class="fact fact-2">
		<template slot="header">
			<div class="col-xs-12 section">
				<p class="lead">2,432 people are already involved. <strong>Are You?</strong></p>

				<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Get involved</a>
			</div>
		</template>
	</section-row>

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