@extends('layouts.app')

@section('title')News @endsection
@section('meta_description')Index of the latest news @endsection

@section('content')

<section id="articles">

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

	<div class="news-and-letter-download">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 col-md-8">
					<div class="news">
						<div class="row">
							@foreach($articles as $article)
								<article class="col-xs-12 col-md-6">
									<h3><a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a></h3>
									<p>{{ $article->lead }}</p>
								</article>
							@endforeach
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-md-4">
					<div class="letter-download">
						
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

@endsection