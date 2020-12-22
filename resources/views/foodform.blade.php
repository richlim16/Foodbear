@extends('layouts/app')

@section('content')
  <div class="py-4">
    <div class="form">
        <div id="form-container">
        <h1>FOOD INFO</h1>
        <form action="/addFood" method="post">
            @csrf
            <div class="form-group row">
                <label for="foodName" class="col-md-4 col-form-label text-md-right">Food Name</label>

                <div class="col-md-6">
                    <input id="foodName" type="text" name="foodName" required autocomplete="off" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">Food Price</label>

                <div class="col-md-6">
                    <input id="price" type="text" name="price"  required autocomplete="off" autofocus placeholder="Php">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                <div class="col-md-6">
                    <textarea id="description" type="text" name="description"  required autocomplete="off" autofocus placeholder="Php"></textarea>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>
        </form>
        </div>
    </div>
  </div>
@endsection
