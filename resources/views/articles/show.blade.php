@extends('layouts.app')

@section('title'){{ $article->title }} @endsection
@section('meta_description')CQC is ... @endsection

@section('content')
<section id="article-page">

	<div class="masthead">
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 section">
					<h1>Every life matters</h1>
		
					<button class="btn btn-primary btn-large">Get Involved</button>
				</div>
		
			</div>
		</div>
	</div>

	<div class="article">
		<div class="container">
			<div class="row">
				<article class="col-xs-12">
					<h2>{{ $article->title }}</h2>
					<h6>Created by <span>{{ $article->user->name }}</span>
					{{ $article->updated_at->diffForHumans() }}</h6>
					<p class="lead">{!! nl2br($article->lead) !!}</p>
					<div>{!! nl2br($article->body) !!}</div>



					<div class="leave-comment">
						<h2>Leave a comment:</h2>
						<hr>
						@include('comments.form')
					</div>

					<div class="comments">
						@unless( count($article->comments) == 0 )
							<h2>Comments:</h2>
							<hr>
							
							@include('comments.list', ['collection' => $comments['root']])
						@endunless
					</div>

				</article>

				<aside class="col-xs-12 col-md-4">
					<div class="letter-download">
						
					</div>
				</aside>

			</div>
		</div>
	</div>

</section>

@endsection