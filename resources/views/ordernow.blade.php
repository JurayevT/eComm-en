@extends('master')
@section('title')
  Cart list
@endsection
@section('content')
<div class="container">
    <div class="col-sm-10">
        <table class="table my-4">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <th>Total Amount</th>
                <td>$ {{ $total + 10 }}</td>
              </tr>
            </tbody>
        </table>
        <div>
            <form action="/orderplace" method="POST">
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" rows="3" class="form-control"></textarea>
                  <label class="mt-4 mb-2">Payment Method:</label>
                  <div class="form-check py-1">
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="payment1" checked>
                    <label class="form-check-label" for="payment1">
                        online payment
                    </label>
                  </div>
                  <div class="form-check py-1">
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="payment2">
                    <label class="form-check-label" for="payment2">
                        EMI payment
                    </label>
                  </div>
                  <div class="form-check py-1">
                    <input class="form-check-input" value="cash" type="radio" name="payment" id="payment3">
                    <label class="form-check-label" for="payment3">
                        Payment on Delivery
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary my-3">Order Now</button>
            </form>
        </div>
    </div>

    
    
</div>
@endsection