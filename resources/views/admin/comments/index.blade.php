@extends('layouts.admin')

@section('title')Comments @endsection

@section('content')
<section id="case-studies">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-wrapper">
                <h1>
                    Comments <small>Index</small>
                </h1>
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-comments" aria-hidden="true"></i> Comments
                </li>
                <li class="active"> Index</li>
            </ol>
        </div>
    </div>

    <div class="row">
        @foreach($comments as $comment)
            <div class="col-xs-12 col-md-6 comments-wrapper">
                <div class="list-of-unapproved-comments">
                    <p>{!! nl2br($comment->text) !!}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection