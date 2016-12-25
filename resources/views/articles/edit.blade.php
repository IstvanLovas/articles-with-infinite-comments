@extends('layouts.app')

@section('title')Edit article @endsection
@section('meta_description')Edit article @endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Article</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" accept-charset="UTF-8" method="POST" action="{{ url('/articles', $article->id) }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="_method" value="PATCH">

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title:</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body" class="col-md-4 control-label">Body:</label>

                            <div class="col-md-6">
                                <textarea id="body" type="text" class="form-control" name="body"></textarea>

                                @if ($errors->has('body'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('published_at') ? ' has-error' : '' }}">
                            <label for="published_at" class="col-md-4 control-label">Published on:</label>

                            <div class="col-md-6">
                                <input  id="published_at"
                                        type="date"
                                        class="form-control"
                                        name="published_at"
                                        value="{{ date('Y-m-d') }}">

                                @if ($errors->has('published_at'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('published_at') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tag_list') ? ' has-error' : '' }}">
                            <label for="tag_list" class="col-md-4 control-label">Tags:</label>

                            <div class="col-md-6">
                                <select id="tag_list" multiple="multiple" class="form-control" name="tag_list[]">
                                    <option disabled selected value="">Please select tags</option>
                                    @foreach($tags as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('tag_list'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tag_list') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Article
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection