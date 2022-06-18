@extends('backend.app');
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Post Your Blog</h4>
                      <form class="forms-sample" method="post" action="/travelblog" enctype="multipart/form-data">
                        @csrf

                      <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="title" name="title" class="form-control" id="title" placeholder="Enter your blog title">
                      </div>

                      <div class="form-group">
                        <label for="description">Textarea</label>
                        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>

                        <input type="file" name="image" class="form-control" id="image" accept="image/png, image/jpeg">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <a href="/travelblog" class="btn btn-dark">Cancel</a>
                    </form>
                  </div>
                </div>
              </div>



        </div>
    </div>
@endsection
