@extends('layouts.app')

@section('title'){{ $article->title }} @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="article-page">
	
	<masthead>
		<h1 slot="header">Short key<br>Statements 2</h1>
		<a href="#newsletter-sign-up" slot="button" class="btn btn-primary btn-large text-uppercase">Get involved</a>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<article-row>
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