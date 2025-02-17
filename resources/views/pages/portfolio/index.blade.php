@extends('pages.portfolio.layout')
@section('content-pane')
@foreach($properties as $property)
<div class="mb-3">
    <h3 class="h3">Property {{$property->id}}</h3>
    <h4 class="h4 mb-2">{{$property->name}}</h4>
    <section class="row">
        <div class="col-12 mb-2 col-md-6 position-relative">
            <img src="{{$property->interiorsImageUrl}}" alt="" class="img-fluid h-auto">
            <a href="{{route('interior',['id' => $property->id])}}" class="position-absolute bottom-0 start-0 m-5 text-white text-decoration-none fw-bold px-4 py-2 bg-opacity-75">
                <span class="fs-6 fs-md-5">Discover More</span>
                <i class="fa-sharp fa-solid fa-angles-right"></i>
                <i class="fa-sharp fa-solid fa-angle-right" style="margin-left: -8px;"></i>
            </a>
        </div>
        <div class="col-12 col-md-6 position-relative">
            <img src="{{$property->attractionsImageUrl}}" alt="" class="img-fluid h-auto">
            <h4 class="display-6 h4 position-absolute top-50 start-0 mx-5 text-white text-decoration-none fw-bold px-4 py-2 bg-opacity-75" style="transform: translateY(-50%);">Tourist Spots and Attractions</h4>
            
            <a href="{{route('attraction',['id' => $property->id])}}" class="position-absolute bottom-0 start-0 m-5 text-white text-decoration-none fw-bold px-4 py-2 bg-opacity-75">
                <span class="fs-6 fs-md-5">Discover More</span>
                <i class="fa-sharp fa-solid fa-angles-right"></i>
                <i class="fa-sharp fa-solid fa-angle-right" style="margin-left: -8px;"></i>
            </a>
        </div>
    </section>
</div>
@endforeach
@endsection