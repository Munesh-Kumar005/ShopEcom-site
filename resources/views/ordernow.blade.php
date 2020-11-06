@extends('master')
@section('content')

<div class=" custom-product">

<div class="col-sm-6">
  <table class=" table table-striped">

    <tbody>
      <tr>
        <td>Price</td>
        <td>{{ $total }}Pk</td>

      </tr>
      <tr>
        <td>Tax</td>
        <td>0 Pk</td>

      </tr>
      <tr>
        <td>Delivery</td>
        <td>100 Pk</td>

      </tr>

      <tr>
        <td>Totl Amount</td>
        <td>{{ $total+100 }}</td>

      </tr>
    </tbody>
  </table>

  <form method="POST" action="orderplace" >
      @csrf
  <div class="form-group">

    <textarea class="form-control" name="address" placeholder="Please enter your full address" id="email"></textarea>
  </div>
  <div class="form-group">
<label>Payment Method</label>
   <p>
        <input type="radio" value="cash"  name="payment"> <span>Online Pyament</span></p>
        <p>
         <input type="radio" value="cash" name="payment"> <span>Cash On Delivery Pyament</span></p>
         <p>
          <input type="radio" value="cash"  name="payment"> <span>Debit card</span></p>

  </div>

  <button type="submit" class="btn btn-default">Order Now</button>
</form>
</div>
</div>

@endsection
