@extends('pages.portfolio.layout')
@section('content-pane')
<h3 class="h3">Property {{$property->id}}</h3>
    <h4 class="h4 mb-2">{{$property->name}}</h4>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3">
        @foreach($property->interiors as $interior)
            <div class="col mb-4 px-3">
                <div class="position-relative h-100">
                    <img src="{{$interior->imageUrl}}" alt="{{$interior->description}}">
                    <div class="position-absolute top-0 start-0 m-3 text-white fw-bold">{{$interior->description}}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection