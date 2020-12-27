@extends('layouts\app')
@section('content')

    <div class="menu-container" id="top"></div>

    <div class="container">
        <div class="row separator-top center">
            <div class="col offset-md">
                <h1 class="product-title">Product</h1>
                <p class="div-separator"></p>
                <h4>Find your food cravings now!</h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($food as $food)
              <div class="col-3 offset-md center gap1">
                  <img src="{{asset('storage/images/'.$food->foodPic)}}" alt="Food Photo Here" class="foodImage">
                  @if(Auth::user())
                  <form action="/addToCart" method="post">
                    @csrf
                    <input type="hidden" name="foodId" value="{{$food['id']}}">
                    <input type="hidden" name="customerId" value="{{Auth::user()->id}}">
                    <button type="submit" name="cart-btn" class="btn btn-primary gap1">Add To Cart</button>
                  </form>
                  @endif
                  <h4 id='foodName' class="foodname">{{$food['foodName']}}</h4>
                  <h5 id="price">₱ {{$food['price']}}.00</h5>
                  <p id="description">{{$food['description']}}</p>
              </div>
            @endforeach
        </div>
    </div>
@endsection
