@extends('pages.portfolio.layout')
@section('content-pane')
<h3 class="h3">Property {{$property->id}}</h3>
    <h4 class="h4 mb-2">{{$property->name}}</h4>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
        @foreach($property->attractions as $attraction)
            <div class="col">
                <div class="card">
                    <img src="{{$attraction->imageUrl}}" alt="{{$attraction->description}}" class="card-img-top mb-1">
                    <p class="card-text text-center">{{$attraction->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection