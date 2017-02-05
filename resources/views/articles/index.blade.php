@extends('layouts.app')

@section('title')Latest articles @endsection
@section('meta_description')Index of the latest articles @endsection

@section('content')
<section id="articles">
	<masthead>
		<h1 slot="header">Short key<br>Statements 3</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</a>
		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<section-row class="articles-header-and-filters">
		<template slot="header">
			<div class="col-xs-12">
				<div class="section header-wrapper">
					<header>
						<h2>Recent Updates</h2>
						<h4>with the campaign and beyond</h4>
					</header>
					<div class="hidden-xs hidden-sm join-the-conversation">
						<join-the-conversation></join-the-conversation>
					</div>
				</div>
			</div>
		</template>
		
		<template slot="body">
			<div class="col-xs-12" id="filters">
				<h4>Showing news for:</h4>
				<ul class="list-inline">
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">All</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">CQC Correspondence</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Filter 3</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Filter 4</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Filter 5</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Filter 6</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Fitler 7</button></li>
					<li><button class="btn btn-brand-yellow brand-white-bg text-uppercase">Fitler 7</button></li>
				</ul>
			</div>
		</template>
	</section-row>

	<section-row class="articles">
		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					@foreach($articles as $article)
						<div class="col-xs-12 col-sm-6 col-md-4 latest-news">
							<article-tile>
								<a slot="article-title" href="/articles/{{ $article->id }}" title="Link to read more about article">{{ $article->title }}</a>
								<div slot="article-lead" class="body-text">{{ $article->lead }}</div>
								<a slot="article-link" href="/articles/{{ $article->id }}" class="btn btn-brand-yellow brand-white-bg text-uppercase" title="Link to read more about article">Read Article</a>
							</article-tile>
						</div>
					@endforeach
				</div>
			</div>

			<div class="col-xs-12">
				{{ $articles->links() }}
			</div>
		</template>
	</section-row>

	<section-row class="fact fact-1">
		<template slot="header">
			<div class="col-xs-12 section">
				<p class="lead">Incredible fact about how important this issue is.  <br> <strong>Don’t you want to hear more?</strong></p>

				<a href="#newsletter-sign-up" class="btn btn-primary btn-large text-uppercase">Learn more</a>
			</div>
		</template>
	</section-row>
</section>
@endsection