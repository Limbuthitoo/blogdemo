@extends('backend.app');
@section('content')

<div class="card">
    <div class="card-title p-3">
<span class="h3">Travel Blog Posts</span>
<a href="/travelblog/create" class="btn btn-success float-right"> Add Blogs</a>
    </div>
    <div class="card-body">
        <div class="row">
            @foreach ($travelblogs as $travelblog)
            <div class="col-md-3">
                <div class="card">

                    <div class="card-body">
                        <img src="{{asset($travelblog->image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="card-footer">
                        <span class="h4">{{$travelblog->title}}</span>
                        <a href="/travelblog/{{$travelblog->id}}/edit" class="btn btn-success float-right">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>


    </div>
@endsection
