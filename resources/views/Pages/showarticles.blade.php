@extends('Pages.page_layout.mainlayout')
@section('title')
    Create article page
@endsection

@section('content')
    <div class="show-article-wrapper">
        <div class="row">
            <div class="col-md-8">
                <h3>{{ $getPost->title }}</h3>
                <p>{{ $getPost->body }}</p>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Created at:</dt>
                        <dd>{{date('M j, Y h:ia',strtotime($getPost->created_at))}}</dd>
                    </dl>
                    <hr>
                    <dl class="dl-horizontal">
                        <dt>Updated at:</dt>
                        <dd>{{date('M j, Y h:ia', strtotime($getPost->updated_at))}}</dd>
                    </dl>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{route('posts.edit',$getPost->id)}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{route('posts.destroy',$getPost->id)}}" class="btn btn-danger btn-block">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
