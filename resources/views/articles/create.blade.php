@extends('layouts.app')

@section('title')Edit article @endsection
@section('meta_description')Edit article @endsection

@section('content')
    <section id="create-new-article">
        <div class="container">
            <div class="row">
            	<h1>Create a new Article</h1>
                <create-article-form :tags="{{ $tags }}" class="col-md-8 col-md-offset-2"></create-article-form>
            </div>
        </div>
    </section>
@endsection