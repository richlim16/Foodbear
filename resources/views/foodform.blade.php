@extends('layouts.app')

@section('content')
<h1>hi</h1>
  <div class="form">
    <div id="form-container">
      <form class="form" action="/food/add" method="post">
        <h1>FOOD INFO</h1>
        @csrf
        <label for="name">Food Name</label>
        <input type="text" name="name"class="name" autocomplete="off">
        <label for="price">Price</label>
        <input type="number" name="price" class="price" autocomplete="off" placeholder="Php">
        <button type="submit">Send it</button>
      </form>
    </div>
  </div>
@endsection
