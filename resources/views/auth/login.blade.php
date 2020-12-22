@extends('layouts.app')

@section('content')
  
<style>
    .login-container{
        /* background:linear-gradient(0deg, #ffa5514d, #7fff51a1), url("images/desk13.jpg"); */
        background-image: url("images/foodbg-2.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 700px;}
</style>

    <div class="login-container">
        <div class="form">
            <div class="row">
            <div id="form-container">
                <h1>LOGIN</h1>
                <div id="inputs">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer footer-font">
        <div class="row">
            <div class="col-4 offset-md-1">
                <div class="footer-desc">
                    <a href="AdminLogin.php"><img class="footer-logo" src="images/foodbear-logo-w-title.png" alt="logo" style="width: 250px; margin-bottom: 10px;"></a>
                    <p style="text-align: justify;">
                        Food Bear group is the leading global online food delivery marketplace. Headquatered in Cebu, Philippines. It operates
                        is more than 40 cities in the nation. Food Bear allows users to conveniently discover food around their neighborhood and directly order 
                        their favourite meals online.<br><br>

                        In the Philippines, Food Bear was launched in December 2020 and has since grown to over 1,000 partner restaurants nationwide.
                    </p>
                </div>
                <p class="separator-right"></p>
            </div>
            <div class="col-1 offset-md navigation">
                <div class="about-footer">
                    <b><p class="footer-title">Navigation</p></b>
                    <p class="footer-underline"></p>
                    <ul class="footer-menu inline-padding">
                        <a href="#top"><li>Top</li></a>
                        <a href="#product"><li>Product</li></a>
                        <a href=""><li>Policy</li></a>
                    </ul>
                </div>
            </div>
            <div class="col-2 offset-md ">
                <div class="top-loc-footer">
                    <b><p class="footer-title">Opening Hours</p></b>
                    <p class="footer-underline1"></p>
                    <ul class="footer-menu inline-padding">
                        <li>Mon - Fri</li>
                        <p>9:00 AM - 6:00 PM</p>
                        <li>Sat - Sun</li>
                        <p>9:00 AM - 6:00 PM</p>
                    </ul>
                </div>
            </div>
            <div class="col-3 offset-md">
                <div class="top-loc-footer">
                    <b><p class="footer-title">Contact Us</p></b>
                    <p class="footer-underline"></p>
                    <ul class="footer-menu inline-padding">
                        <li>Email</li>
                        <p><a class="highlight" href=""><b>support@foodbear.com</b></a></p>
                        <li>Phone</li>
                        <p><a class="highlight" href=""><b>0912-345-6789</b></a></p>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col center">
                <p>Copyright © <a class="highlight" href=""><b>FoodBear</b></a> 2020</p>
            </div>
        </div>
    </footer>
@endsection
