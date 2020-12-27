@extends('layouts\app')
@section('content')

    <div class="welcome-container" id="top">
        <div class="welcome">
            <div class="contianer">
                <div class="row">
                    <div class="col center gap">
                        <h1 class="welcome-title">Welcome to Food Bear!</h1>
                        <p class="col-7 welcome-subtitle position">For us, it's not just about bringing you good food from your favourite restaurants. It's about making a connection, which is why we sit down with the chefs, dreaming up menus that will arrive fresh and full of flavour. Try us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    <div class="container gap">
        <div class="row">
            <img src="../images/foodbear-logo-w-title-black.png" alt="" srcset="" class="separator-bottom margin-default">
            <h1 class="black-title position separator1">Food Bear is so easy to use that it’s hard to explain.</h1>
            <p class="black-subtitle position">The foodbear group is the leading global online food delivery marketplace. 
                Headquartered in Berlin, Germany. It operates in more than 40 countries across 5 continents.
                foodbear allows users to conveniently discover food around their neighbourhood and directly order their favourite meals online or via mobile. <br><br>

                In the Philippines, foodbear was launched in June 2014 and has since grown to over 1,000 partner restaurants nationwide. <br><br>

                We are a small team of problem solvers, designers, thinkers and tinkers, working around the clock to make foodbear the most powerful online tool for food delivery. 
                We believe that ordering food should be easy, fast and definitely fun! <br><br>

                Tired of the same take-out for lunch? Too lazy to go out for dinner? 
                Simply download the foodbear app or go to www.foodbear.ph, and enter your location to see which restaurants deliver to you. 
                Food delivery has never been easier! </p>
        </div>
    </div>

    <div class="product separator" id="product">
        <div class="container">
            <div class="row separator-top center">
                <div class="col offset-md">
                    <h1 class="product-title">About Us</h1>
                    <p class="div-separator"></p>
                    <h6>Know who create FoodBear</h6>
                </div>
            </div>
        </div>
    </div>  

    <div class="container">
        <div class="row">
            <div class="col-3 offset-md center">
                <img src="../images/rich.jpg" alt="Rich Tristan Lim" srcset="" class="image-size">
                <h3 class="gap1">Rich Tristan Lim</h3>
                <h5>Back-end</h5>
            </div>
            <div class="col-3 offset-md center">
                <img src="../images/antoine.jpg" alt="Antoine Ang" srcset="" class="image-size">
                <h3 class="gap1">Antoine Ang</h3>
                <h5>Back-end</h5>
            </div>
            <div class="col-3 offset-md center">
                <img src="../images/bea.jpg" alt="Carla Beatriz Ventura" srcset="" class="image-size">
                <h3 class="gap1">Carla Beatriz Ventura</h3>
                <h5>Front-end</h5>
            </div>
            <div class="col-3 offset-md center">
                <img src="../images/angelica.jpg" alt="Maria Angelica Zaragoza" srcset="" class="image-size">
                <h3 class="gap1">Maria Angelica Zaragoza</h3>
                <h5>Front-end</h5>
            </div>
        </div>
    </div>


@endsection
