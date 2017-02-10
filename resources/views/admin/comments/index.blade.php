@extends('layouts.admin')

@section('title')List of Comments @endsection

@section('content')
<section id="comments">
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

    @if(count($comments) > 0)
{{--         <div class="row">
            <div class="col-xs-12">
                <ul class="comments-filters">
                    <li>
                        <button class="btn btn-brand-yellow brand-white-bg text-uppercase">All</button>
                    </li>
                    <li>
                        <button class="btn btn-brand-yellow brand-white-bg text-uppercase">Unread</button>
                    </li>
                    <li>
                        <button class="btn btn-brand-yellow brand-white-bg text-uppercase">Read</button>
                    </li>
                </ul>
            </div>
        </div> --}}

        <div class="row">
            <div class="col-xs-12">
                @include('admin.comments.partials.comments')
            </div>
        </div>
    @endif
</section>
@endsection