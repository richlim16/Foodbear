@extends('layout')
@section('content')
  <div class="menu">
    @foreach($item as $item)
    <div class="item">
      <h1 id="name">{{$item['name']}}</h1>
      <h1 id="price">Php {{$item['price']}}</h1>
    </div>
    @endforeach
  </div>
@endsection
