@extends('master')

@section('title')
  Login Page
@endsection

@section('content')

<div class="container">
    <div class="row" style="height: 500px">
        <div class="col-md-6 offset-md-2 col-lg-4 offset-lg-4">
            <form action="login" method="POST" class="pt-5 mt-5">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
              </form>
        </div>
    </div>
</div>

@endsection