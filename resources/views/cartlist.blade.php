@extends('master')
@section('title')
  Cart list
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3 class="my-4">Result for Products:</h3>
                <a href="/ordernow" class="btn btn-success mb-4">Order Now</a>
                    @foreach ($products as $product)
                    <div class="row pb-4 mb-4 align-items-center" style="border-bottom: 1px solid #aaa">
                        <div class="col-sm-4">
                            <a href="{{ 'detail/' . $product->id }}" class="d-block">
                                <img src="{{ $product->gallery }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <div class="p-2">
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{ $product->cartId }}" class="btn btn-danger">
                                Remove to Cart
                            </a>
                        </div>
                    </div>
                    @endforeach
                <a href="/ordernow" class="btn btn-success mb-4">Order Now</a>
            </div>
        </div>
    </div>
    
</div>
@endsection