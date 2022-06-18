@extends('frontend.app');
@section('content')
<div class="row g-3">
    @foreach ($travelblogs as $travelblog)
    <div class="col-md-4 p-1">
        <div class="card p-4 overflow-hidden" style="height: 550px;">
            <div class="card-tilte">
                <h4>{{$travelblog->title}}</h4>
            </div>
            <img src="{{$travelblog->image}}" alt="" class="card-img">
            <div class="card-body">
                {!!Str::limit($travelblog->description,250,'...')!!}
            </div>
            <a name="" id="" class="btn btn-primary" href="{{$travelblog->id}}" role="button">Readmore</a>
        </div>
    </div>
    @endforeach

</div>
@endsection
