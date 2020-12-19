@extends('layout')
@section('content')
    <form class="form" action="/user/add" method="post">
      <h1>USER INFO</h1>
      @csrf
      <label for="username">Username</label>
      <input type="text" name="username"class="username" autocomplete="off">
      <label for="password">Password</label>
      <input type="password" name="password" class="username" autocomplete="off">
      <button type="submit">Send it</button>
    </form>
@endsection
