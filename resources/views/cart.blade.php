@extends('layouts\app')
@section('content')
<table>
  <thead>
    <th>Order ID</th>
    <th>Food Name</th>
    <th>Price</th>
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
        <input type="submit" name="sendIt" value="Delete">
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
<form action="submitOrder" method="post">
  @csrf
  <input type="hidden" id="customerId" name="customerId" value="{{Auth::user()->id}}">
  <input type="submit" name="submit" value="Purchase">
</form>
@endsection
