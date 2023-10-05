@extends('layouts.app')
@section('content')
    
<div class="introduction">
    <div class="description">
        <h1>Bringing You The Hottest In Town</h1>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Bibendum est ultricies integer quis. Iaculis urna id 
            volutpat lacus laoreet.
            <br><br>
            Mauris vitae ultricies leo integer malesuada. Ac odio tempor 
            orci dapibus ultrices in. Egestas diam in arcu cursus euismod. 
            Dictum fusce ut placerat orci nulla.. Tincidunt ornare massa eget 
            egestas purus viverra accumsan in nisl.
        </p>
        <div class="social">
            <button><img src="images/appStore.png" alt=""></button>
            <button><img src="images/playStore.png" alt=""></button>
        </div>
    </div>
    <div class="app-pic">
        <div class="asp asp-1-1">
            <img src="images/app.png" alt="">
        </div>
    </div>
</div>
<div class="app-features">
    <div class="spot">
        <img src = "{{ asset('svg/spot.svg')}}"/>
    </div>
    @include('components/carousel')
</div>
@endsection