@extends('master')


@section('content')

<div class=" container custom-product">
    
    <div id="demo" class="carousel slide " data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators indicators-color">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        
        <div class="carousel-inner ">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}" data-interval="2000">
            <img src="{{$item['gallery']}}" class="d-block w-100 slider-img" >
                <div class="carousel-caption d-none d-md-block slider-text">
                    <h3>{{$item['name']}}</h3>
                    <p>{{$item['description']}}</p>
                </div>
            </div>
            @endforeach   
        </div>


        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</div>   
    

@endsection