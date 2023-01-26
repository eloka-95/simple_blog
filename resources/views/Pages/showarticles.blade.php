@extends("Pages.page_layout.mainlayout")
@section('title')
    Create article page 
@endsection

@section("content")
    <div class="container form-wrapper">
        <div class="row">
           <h1>{{ $getPost->title}}</h1>
           <p>{{ $getPost->body}}</p>
        </div>
    </div>
@endsection
    
