@extends('layouts\app')
@section('content')
  @foreach($history as $item)
    <h1>{{$item['foodName']}}</h1>

  @endforeach
@endsection
