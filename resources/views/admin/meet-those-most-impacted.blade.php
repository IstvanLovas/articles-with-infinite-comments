@extends('layouts.admin')

@section('title')Meet those most impacted page @endsection

@section('content')
<section id="meet-those-most-impacted">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Pages <small>Meet those most impacted</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-fw fa-file"></i> Pages
                </li>
                <li class="active"> Meet those most impacted</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h2>Banner<h2>
            </div>

            <banner    
                :patch-link="'meet-those-most-impacted'"
                :banner-header="{{ json_encode($page->banner_header) }}"
                :banner-subheader="{{ json_encode($page->banner_subheader) }}"
            ></banner>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h2>The Impact is huge<h2>
            </div>

            <the-issue
                :patch-link="'meet-those-most-impacted'"
                :the-issue-header="{{ json_encode($page->the_impact_is_huge_header) }}"
                :the-issue-subheader="{{ json_encode($page->the_impact_is_huge_subheader) }}"
                :the-issue-text-left="{{ json_encode($page->the_impact_is_huge_text_left) }}"
                :the-issue-text-right="{{ json_encode($page->the_impact_is_huge_text_right) }}"
            ></the-issue>

        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
                <h2>Fact<h2>
            </div>

            <fact   :patch-link="'meet-those-most-impacted'"
                    :fact="{{ json_encode($page->fact) }}"
            ></fact>

        </div>
    </div>
</section>
@endsection