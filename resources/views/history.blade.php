@extends('layouts\app')
@section('content')
<table>
  <thead>
    <th>Order ID</th>
    <th>Food Name</th>
    <th>Price</th>
  </thead>
  <tbody>
    @foreach($history as $item)
    <tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['foodName']}}</td>
    <td>{{item['price']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
