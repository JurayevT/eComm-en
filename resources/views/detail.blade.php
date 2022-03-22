@extends('master')
@section('title')
  Project details
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 mt-4 pr-5">
            <img src="{{ $product->gallery }}" class="img-fluid" width="70%" alt="product image">
        </div>
        <div class="col-sm-6 mt-4">
            <a href="/" class="btn btn-secondary mb-3">Go back</a>
            <h2>{{ $product['name'] }}</h2>
            <h3>Price: {{ $product['price'] }} $</h3>
            <h4 class="pb-3 mb-3">Details: {{ $product['description'] }}</h4>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}" />
                <button class="btn btn-primary mb-3 d-block">Add to cart</button>
            </form>
            <button class="btn btn-success mb-3">Buy now</button>
        </div>
    </div>
</div>
@endsection