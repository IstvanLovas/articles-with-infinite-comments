@extends('layouts.app')

@section('title'){{ $article->title }} @endsection
@section('meta_description')Title od article: {{ $article->title }} @endsection

@section('og')
<meta property="og:site_name" content="Created by parents">
<meta property="og:title" content="{{ $article->title }}" />
<meta property="og:description" content="{{ $article->lead }}">
<meta property="og:image" content="{{ $article->social_image or null }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image:alt" content="Picture relevant to the article">
@endsection

@section('content')
<section id="article-page">
	
	<masthead>
		<h1 slot="header">Short key<br>Statements 2</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<article-row
		:similar-articles="'similarArticles'"
	>
		<h2 slot="article-title" class="article-title">{{ $article->title }}</h2>
		<p slot="article-lead"><strong>{!! nl2br($article->lead) !!}</strong></p>
		<div slot="article-body" class="article-body">{!! nl2br($article->body) !!}</div>

		<template slot="article-comments">
			<div id="article-comments" class="section">
				<hr>
				<div class="leave-a-comment">
					<h2>Your Thoughts:</h2>
					@include('comments.form')
				</div>

				@unless(count($comments) == 0)
					<div class="comments">
						@include('comments.list', ['collection' => $comments['root']])
					</div>
				@endunless
			</div>
		</template>

		{{-- <h6>Created by <span>{{ $article->user->name }}</span>
		{{ $article->updated_at->diffForHumans() }}</h6>

		@if(count($article->tags) > 0)
			<ul>
				@foreach($article->tags as $tag)
					<li>{{ $tag->name }}</li>
				@endforeach
			</ul>
		@endif --}}
	</article-row>

</section>
@endsection