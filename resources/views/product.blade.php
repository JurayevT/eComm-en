@extends('master')
@section('title')
  Products
@endsection
@section('content')

<div class="custom-product mt-2">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators"> 
          @foreach ($products as $product)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $product->id - 1 }}" class="{{ $product->id == 1 ?  'active' : '' }}" aria-current="true">
            </button>  
          @endforeach
        </div>

        <div class="carousel-inner">
          @foreach ($products as $product)
            <a href="{{ 'detail/' . $product->id }}">
              <div class="carousel-item {{ $product->id == 1 ?  'active' : '' }}">
                  <img src="{{ $product->gallery }}" class="d-block slider-img d-block">
                  <div class="carousel-caption d-none d-md-block slider-text">
                      <h5>{{ $product->name }}</h5>
                      <p>{{ $product->description }}</p>
                  </div>
              </div>
            </a>
          @endforeach
        </div>

        <button class="carousel-control-prev prevv" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">previos</span>
        </button>
        <button class="carousel-control-next nextt" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">next</span>
        </button>
      </div>
</div>
<div class="container">
<div class="trending-wrapper">
    <h3>Trending Products:</h3>
      <div class="d-flex flex-wrap">  
        @foreach ($products as $product)
          <a href="{{ 'detail/' . $product->id }}">
            <div class="me-4">
                <img src="{{ $product->gallery }}" style="height: 150px">
                <div class="">
                    <h4>{{ $product->name }}</h4>
                </div>
            </div>
          </a>
        @endforeach
      </div>
</div>
</div>
@endsection