@extends("Pages.page_layout.mainlayout")
@section('title')
    Create article page
@endsection

@section("content")
    <div class="container form-wrapper">
        <div class="row">
            <form method="POST" action="{{ route("posts.store") }}">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Title</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Email" required>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput2">Body</label>
                  <textarea  type="text" class="form-control" id="formGroupExampleInput2" name="body" placeholder="Article" rows="10" cols="50" maxlength="200"  required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Post Article</button>
            </form>
        </div>
    </div>
@endsection

