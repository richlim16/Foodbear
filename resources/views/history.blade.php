@extends('layouts\app')
@section('content')
  <div class="history-container" id="top"></div>

  <div class="container">
        <div class="row separator-top center">
            <div class="col offset-md">
                <h1 class="product-title">Purchase History</h1>
                <p class="div-separator"></p>
                <h4>Recall your past transactions</h4>
            </div>
        </div>
    </div>

  <div class="container">
    <div class="row center">
      <table class>
      <thead>
          <th class="center">Order No</th>
          <th class="center" style="width: 700px;">Food Name</th>
          <th class="center" style="width: 150px;">Price</th>
        </thead>
        <tbody>
          @foreach($history as $item)
          <tr>
          <td class="center">{{$item['id']}}</td>
          <td>{{$item['foodName']}}</td>
          <td class="center">₱ {{$item['price']}}.00</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
