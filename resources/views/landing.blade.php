<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Bear</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/landing.css">
</head>

<style>
    .welcome-container{
        /* background:linear-gradient(0deg, #ffa5514d, #7fff51a1), url("images/desk13.jpg"); */
        background-image: url("images/foodbg-3.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 570px;}
    </style>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container" style="margin-bottom: 0px;">
            <a href=""><img src="images/foodbear-logo-w-title.png" alt="" srcset="" width="35%" style="float: left; text-align: center; padding: 10px 0px"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li  class="nav-item">
                        <a class="nav-link" href="/landing">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="welcome-container" id="top">
        <div class="welcome">
            <div class="contianer">
                <div class="row">
                    <div class="col center gap">
                        <h1 class="welcome-title">Welcome to Food Bear!</h1>
                        <p class="welcome-subtitle">vourite restaurants. It's about making a connection, which is why we sit down with the chefs,<br> dreaming up menus that will arrive fresh and full of flavour. Try us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="product separator" id="product">
        <div class="container">
            <div class="row separator-top center">
                <div class="col offset-md">
                    <h1 class="product-title">Product</h1>
                    <p class="div-separator"></p>
                    <h6>Most purchase foods</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row separator-bottom center">
                <div class="col-3 offset-md">
                    <h3>Product 1</h3>
                    <h5>Price</h5>
                    <h6>Description</h6>
                </div>
                <div class="col-3 offset-md">
                    <h3>Product 1</h3>
                    <h5>Price</h5>
                    <h6>Description</h6>
                </div>
                <div class="col-3 offset-md">
                    <h3>Product 1</h3>
                    <h5>Price</h5>
                    <h6>Description</h6>
                </div>
                <div class="col-3 offset-md">
                    <h3>Product 1</h3>
                    <h5>Price</h5>
                    <h6>Description</h6>
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
                        <a href="#promo"><li>Product</li></a>
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
</body>
</html>