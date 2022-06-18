@extends('frontend.app');
@section()
<div class="container">
    <div class="card p-4">
        <div class="card-tilte">
            <h4>{{$travelblog->title}}</h4>
        </div>
        <img src="{{$travelblog->image}}" alt="" class="card-img">
        <div class="card-body">
            {!!$travelblog->description!!}
        </div>
        <a name="" id="" class="btn btn-primary" href="/" role="button">Readmore</a>
    </div>
</div>
@endsection
