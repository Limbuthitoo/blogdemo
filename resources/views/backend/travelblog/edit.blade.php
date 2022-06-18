@extends('backend.app');
@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Post Your Blog</h4>
                      <form class="forms-sample" method="post" action="/travelblog/{{$travelblog->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                      <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="title" name="title" class="form-control" id="title" value="{{$travelblog->title}}">
                      </div>

                      <div class="form-group">
                        <label for="description">Textarea</label>
                        <textarea class="form-control" name="description" id="description" rows="4" > {!!$travelblog->description!!}</textarea>
                      </div>

                      <div class="form-group">
                        <div>
                            <img src="{{asset($travelblog->image)}}" width="250" alt="">
                        </div>

                        <div class="form-group py-4">
                            <label>File upload</label>

                            <input type="file" name="image" class="form-control" id="image" accept="image/png, image/jpeg">
                          </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Update</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>



        </div>
    </div>
@endsection
