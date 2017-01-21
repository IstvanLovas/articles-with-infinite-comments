@extends('layouts.admin')

@section('title')Create an article @endsection

@section('content')
<section id="create-article">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Articles <small>Create new</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-tachometer" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-file" aria-hidden="true"></i> <a href="{{ route('article-index') }}">Articles</a>
                </li>
                <li class="active"> Create new</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <create-article-form :tags="{{ $tags }}"></create-article-form>
        </div>
    </div>
</section>
@endsection