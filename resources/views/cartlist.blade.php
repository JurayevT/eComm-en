@extends('master')
@section('title')
  Cart list
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3 class="mb-4">Result for Products:</h3>
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
                            <button class="btn btn-danger">
                                Remove to Cart
                            </button>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    
</div>
@endsection