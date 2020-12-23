@extends('layouts/app')

@section('content')
    <div class="login-container">
        <div class="py-4">
            <div class="form">
                <div id="form-container">
                <h1>FOOD INFO</h1>
                <form action="/addFood" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="foodName" class="col-md-4 col-form-label text-md-right">Food Name</label>

                        <div class="col-md-6">
                            <input id="foodName" type="text" name="foodName" required autocomplete="off" autofocus placeholder="">
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
                            <textarea id="description" type="text" name="description"  required autocomplete="off" autofocus placeholder="Food description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foodPic" class="col-md-4 col-form-label text-md-right">Description</label>

                        <div class="col-md-6">
                            <input id="foodPic" type="file" name="foodPic"  required autocomplete="off" autofocus placeholder="Place Your File Here" class="" style="border: 0px"></input>
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
                        <a href="/menu"><li>Menu</li></a>
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
