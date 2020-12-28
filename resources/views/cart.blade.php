@extends('layouts\app')
@section('content')

  <div class="cart-container" id="top"></div>

  <div class="container">
      <div class="row separator-top center">
          <div class="col offset-md">
              <h1 class="product-title">Cart</h1>
              <p class="div-separator"></p>
              <h4>Review your order before check out</h4>
          </div>
      </div>
  </div>

  <div class="container">
    <div class="row center">
        <table>
          <thead>
              <th class="center">Order No</th>
              <th class="center" style="width: 700px;">Food Name</th>
              <th class="center" style="width: 150px;">Price</th>
          </thead>
            <tbody>
            @foreach($cart as $item)
              <tr>
              <td>{{$item['id']}}</td>
              <td>{{$item['foodName']}}</td>
              <td>{{$item['price']}}</td>
              <td>
                <form action="/deleteFromCart" method="post">
                  @csrf
                  <input type="hidden" id="customerId" name="customerId"value="{{Auth::user()->id}}">
                  <input type="hidden" name="cartId" value="{{$item['id']}}">
                  <input type="submit" name="sendIt" value="REMOVE ITEM">
                </form>
              </td>
              <form action="/editFromCart" method="post">
                  @csrf
                  <input type="hidden" id="customerId" name="customerId"value="{{Auth::user()->id}}">
                  <input type="hidden" name="cartId" value="{{$item['id']}}">
                  <input type="submit" name="sendIt" value="Edit Item">
              </form>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>

  <div class="container">
    <div class="row">
      <form action="submitOrder" class="margin-default" method="post">
        @csrf
        <input type="hidden" id="customerId" name="customerId" value="{{Auth::user()->id}}">
        <input type="submit" name="submit" value="PROCEED TO PURCHASE">
      </form>
    </div>
  </div>
@endsection
