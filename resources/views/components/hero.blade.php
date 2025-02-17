@props(['image','text','white' => false])
<div class="w-100 min-vh-100 d-flex flex-column justify-content-end mb-3 position-relative">
        <img src="{{asset($image)}}">
        <img src="{{asset('images/hero-pattern.png')}}" class="pattern" alt="pattern">
        <div class="hero-text position-absolute top-50 fw-bold" style="color : {{$white ? '#FFFFFF' : '#0D2348'}}">{{$text}}</div>
</div>