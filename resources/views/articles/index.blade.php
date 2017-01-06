@extends('layouts.app')

@section('title')Latest articles @endsection
@section('meta_description')Index of the latest articles @endsection

@section('content')
<section id="articles">
	<masthead>
		<h1 slot="header">Short key<br>Statements 3</h1>
		<button slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</button>
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
						@include('partials.join-the-conversation')
					</div>
				</div>
			</div>
		</template>
		
		<template slot="body">
			<div class="col-xs-12" id="filters">
				<h4>Showing news for:</h4>
				<ul class="list-inline">
					<li><button>All</button></li>
					<li><button>CQC Correspondence</button></li>
					<li><button>Filter 3</button></li>
					<li><button>Filter 4</button></li>
					<li><button>Filter 5</button></li>
					<li><button>Filter 6</button></li>
					<li><button>Fitler 7</button></li>
					<li><button>Fitler 7</button></li>
				</ul>
			</div>
		</template>
	</section-row>

	<section-row class="articles">
		<template slot="body">
			<div class="col-xs-12">
				<div class="row">
					@foreach($articles as $article)
						<div class="col-xs-12 col-sm-6 col-lg-4 article-wrapper">
							<article>
								<h3><a href="{{ url('/articles', $article->id) }}" title="Link to read more about the article">{{ $article->title }}</a></h3>
								<p>{{ $article->lead }}</p>
								<a href="{{ url('/articles', $article->id) }}" title="Link to read more about the article">Read article</a>
							</article>
						</div>
					@endforeach
				</div>
			</div>

			<div class="col-xs-12 pagination">
				{{ $articles->links() }}
			</div>
		</template>
	</section-row>

	@include('partials.stay-updated-and-why')

</section>
@endsection