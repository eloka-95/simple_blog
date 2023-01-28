{{-- <x-app-layout>
</x-app-layout> --}}
@extends('Pages.page_layout.mainlayout')

@section('title')
    dashboard
@endsection

@section('content')
    <div class="container ">
        <div class="row">
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                    to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>

            <div class=" col-md-8 articles-wrapper ">
                @foreach ($posts as $post)
                    <div class="post">
                        <div class="post-items">
                            <h3>{{ $post->title }}</h3>
                            <p>
                                {{ substr($post->body, 0,50)}}...
                            </p>
                            <a href="{{route('posts.show',$post->id)}}" class="btn btn-primary">Read More</a>
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('posts.destroy',$post->id)}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
