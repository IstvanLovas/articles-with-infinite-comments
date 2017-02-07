@extends('layouts.admin')

@section('title')Comment @endsection

@section('content')
<section id="comments">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-wrapper">
                <h1>
                    Comment
                </h1>
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-comments" aria-hidden="true"></i> <a href="{{ route('comment-index') }}">Comments</a>
                </li>
                <li class="active"> Comment</li>
            </ol>
        </div>
    </div>

    @if($comment)
        <div class="row">
            <div class="col-xs-12">
                @include('admin.comments.partials.comment')
            </div>
        </div>
    @endif
</section>
@endsection