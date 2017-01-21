@extends('layouts.admin')

@section('title')Latest articles @endsection

@section('content')
<section id="case-studies">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-wrapper">
                <h1>
                    Articles <small>Index</small>
                </h1>
                <div class="action-btn">
                    <a href="{{ route('article-create') }}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>
                </div>
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-file" aria-hidden="true"></i> Articles
                </li>
                <li class="active"> Index</li>
            </ol>
        </div>
    </div>

    <div class="row">
        @foreach($articles as $article)
            <div class="col-xs-12 col-sm-6 col-md-4 article-wrapper">
                <article>
					<h3><a href="{{ url('/articles', $article->id) }}" title="Link to read more about the article">{{ $article->title }}</a></h3>
					<p>{{ $article->lead }}</p>
					<a href="{{ url('/articles', $article->id) }}" title="Link to read more about the article">View article</a>
					<a href="{{ route('article-edit', $article->id) }}" title="Link to edit the article">Edit article</a>
				</article>
            </div>
        @endforeach
    </div>

    <div class="row">
        {{ $articles->links() }}
    </div>

</section>
@endsection