@extends('master')
@section('title')
  Cart list
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3 class="my-4">My orders:</h3>
                    @foreach ($orders as $product)
                    <div class="row pb-4 mb-4 align-items-center" style="border-bottom: 1px solid #aaa">
                        <div class="col-sm-4">
                            <a href="{{ 'detail/' . $product->id }}" class="d-block">
                                <img src="{{ $product->gallery }}" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-sm-5 offset-sm-1">
                            <div class="p-2">
                                <h2>Name : {{ $product->name }}</h2>
                                <h5>Delivery Status : {{ $product->status }}</h5>
                                <h5>Address : {{ $product->address }}</h5>
                                <h5>Payment Status : {{ $product->payment_status }}</h5>
                                <h5>Payment Method : {{ $product->payment_method }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
    
</div>
@endsection