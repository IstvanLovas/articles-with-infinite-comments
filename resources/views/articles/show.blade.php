@extends('layouts.app')

@section('title'){{ $article->title }} @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="article-page">
	
	<masthead>
		<h1 slot="header">Short key<br>Statements 2</h1>
		<button slot="button" class="btn btn-primary btn-large text-uppercase">Stay updated</button>

		<template slot="main-header">
			@include('partials.header')
		</template>
	</masthead>

	<article-row>
		<h2 slot="article-title" class="article-title">{{ $article->title }}</h2>
		<p slot="article-lead" class="lead">{!! nl2br($article->lead) !!}</p>
		<div slot="article-body" class="article-body">{!! nl2br($article->body) !!}</div>

		<template slot="article-comments">
			<div class="article-comments section">
				<hr>
				<div class="leave-comment">
					<h2>Leave a comment:</h2>
					@include('comments.form')
				</div>

				@unless( count($article->comments) == 0 )
					<div class="comments">
						<h2>Your Thoughts:</h2>
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