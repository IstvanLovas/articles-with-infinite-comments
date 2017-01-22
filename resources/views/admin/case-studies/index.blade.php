@extends('layouts.admin')

@section('title')Case Studies @endsection

@section('content')
<section id="case-studies">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header-wrapper">
                <h1>
                    Case Studies <small>Index</small>
                </h1>
                <div class="action-btn">
                    <a href="{{ route('case-study-create') }}">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>
                </div>
            </div>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard" aria-hidden="true"></i> <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <i class="fa fa-file" aria-hidden="true"></i> Case Studies
                </li>
                <li class="active"> Index</li>
            </ol>
        </div>
    </div>

    <div class="row">
        @foreach($caseStudies as $caseStudy)
            <div class="col-xs-12 col-md-6 case-study-wrapper">
                <article>
                    <h3>{{ $caseStudy->header }}</h3>
                    
                    <div class="content">

                        <block-quote>
                            <template slot="text">
                                <p slot="quote">{!! nl2br($caseStudy->intro) !!}</p>
                            </template>
                        </block-quote>

                        <p>{!! nl2br($caseStudy->fact) !!}</p>

                    </div>

                    <a href="{{ route('case-study-edit', [$caseStudy->id]) }}">Edit</a>
                </article>
            </div>
        @endforeach

        <div class="col-xs-12">
            {{ $caseStudies->links() }}
        </div>
    </div>

</section>
@endsection