@extends('layouts.admin')

@section('title')Edit an article @endsection

@section('content')
<section id="edit-article">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Articles <small>Edit</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-file" aria-hidden="true"></i> <a href="{{ route('article-index') }}">Articles</a>
                </li>
                <li class="active"> Edit</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <edit-article-form 
                :tags="{{ $tags }}"
                :article="{{ $article }}"
                :article-tags="{{ $articleTags }}"
            ></edit-article-form>
        </div>
    </div>
</section>
@endsection