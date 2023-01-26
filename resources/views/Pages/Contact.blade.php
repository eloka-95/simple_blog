@extends("Pages.page_layout.mainlayout")
@section('title')
    contact page
@endsection

@section("content")
    <div class="container form-wrapper">
        <div class="row">
            <form>
                <div class="form-group">
                  <label for="formGroupExampleInput">Email</label>
                  <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput">Subject</label>
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Subject">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput2">Massage</label>
                  <textarea  type="text" class="form-control" id="formGroupExampleInput2" placeholder="Massage"></textarea>
                </div>
                <button type="button" class="btn btn-success">Send Massage</button>
            </form>
        </div>
    </div>
@endsection
    
