@extends('layouts.admin')

@section('title')Get the facts page @endsection

@section('content')
	<section id="get-the-facts">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Pages <small>The facts</small>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-tachometer" aria-hidden="true"></i>  <a href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li>
                        <i class="fa fa-file" aria-hidden="true"></i> Pages
                    </li>
                    <li class="active"> The facts</li>
                </ol>
            </div>
        </div>
    
        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>Banner<h2>
                </div>

                <banner    
                    :patch-link="'the-facts'"
                    :banner-header="{{ json_encode($page->banner_header) }}"
                    :banner-subheader="{{ json_encode($page->banner_subheader) }}"
                ></banner>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>The Issue<h2>
                </div>

                <the-issue
                    :patch-link="'the-facts'"
                    :the-issue-header="{{ json_encode($page->the_issue_header) }}"
                    :the-issue-subheader="{{ json_encode($page->the_issue_subheader) }}"
                    :the-issue-text-left="{{ json_encode($page->the_issue_text_left) }}"
                    :the-issue-text-right="{{ json_encode($page->the_issue_text_right) }}"
                ></the-issue>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <key-facts-about-issue
                    :patch-link="'the-facts'"
                    :key-facts1-header="{{ json_encode($page->key_fact_1_header) }}"
                    :key-facts1-number="{{ json_encode($page->key_fact_1_number) }}"
                    :key-facts1-image="{{ json_encode($page->key_fact_1_image) }}"
                    :key-facts2-header="{{ json_encode($page->key_fact_2_header) }}"
                    :key-facts2-number="{{ json_encode($page->key_fact_2_number) }}"
                    :key-facts2-image="{{ json_encode($page->key_fact_2_image) }}"
                    :key-facts3-header="{{ json_encode($page->key_fact_3_header) }}"
                    :key-facts3-number="{{ json_encode($page->key_fact_3_number) }}"
                    :key-facts3-image="{{ json_encode($page->key_fact_3_image) }}"
                ></key-facts-about-issue>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>Our Aims<h2>
                </div>

                <our-aims
                    :patch-link="'the-facts'"
                    :our-aims-header="{{ json_encode($page->our_aims_header) }}"
                    :our-aims-subheader="{{ json_encode($page->our_aims_subheader) }}"
                    :our-aims1-text="{{ json_encode($page->our_aims_1_text) }}"
                    :our-aims1-image-path="{{ json_encode($page->our_aims_1_image_path) }}"
                    :our-aims2-text="{{ json_encode($page->our_aims_2_text) }}"
                    :our-aims2-image-path="{{ json_encode($page->our_aims_2_image_path) }}"
                    :our-aims3-text="{{ json_encode($page->our_aims_3_text) }}"
                    :our-aims3-image-path="{{ json_encode($page->our_aims_3_image_path) }}"
                    :our-aims4-text="{{ json_encode($page->our_aims_4_text) }}"
                    :our-aims4-image-path="{{ json_encode($page->our_aims_4_image_path) }}"
                ></our-aims>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>Our Current Challenge<h2>
                </div>

                <our-current-challenge
                    :patch-link="'the-facts'"
                    :our-current-challenge-header="{{ json_encode($page->our_current_challenge_header) }}"
                    :our-current-challenge-text-left="{{ json_encode($page->our_current_challenge_text_left) }}"
                    :our-current-challenge-text-right="{{ json_encode($page->our_current_challenge_text_right) }}"
                ></our-current-challenge>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>Fact<h2>
                </div>

                <fact   :patch-link="'the-facts'"
                        :fact="{{ json_encode($page->fact) }}"
                        :fact-bold="{{ json_encode($page->fact_bold) }}"
                ></fact>

            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-header">
                    <h2>Why Us<h2>
                </div>

                <why-us  
                    :patch-link="'the-facts'"
                    :why-us-header="{{ json_encode($page->why_us_header) }}"
                    :why-us-subheader="{{ json_encode($page->why_us_subheader) }}"
                    :why-us-text="{{ json_encode($page->why_us_text) }}"
                ></why-us>

            </div>
        </div>
    </section>
@endsection