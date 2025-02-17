@extends('layout')
@section('content')
    <x-hero :image="asset('images/portfolio/hero.png')" :white="true" text="Our Portfolio"></x-hero>
    <div class="container">
        <form action="" method="get">
            <select name="property" id="" class="form-select"></select>
        </form>
        @yield("content-pane")
    </div>
@endsection