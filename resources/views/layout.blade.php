<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FoodBear</title>
        <!-- fonts here bro -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
        <style>
        body{
          padding: 0;
          border: none;
          background-color: #eee;
          font-family: 'Oswald', sans-serif;
          font-weight: 500;
        }
        button{
          height: 60px;
          width: 150px;
          border: none;
          border-radius: 10px;
          background-color: #BDA86B;
          color: #eee;
          font-size: 2vh;
          font-family: 'Hammersmith One', sans-serif;
        }
        a.button {
          -webkit-appearance: button;
          -moz-appearance: button;
          appearance: button;

          text-decoration: none;
          color: #BDA86B;
          font-size: 3vh;
          font-family: 'Hammersmith One', sans-serif;
          transition: .5s;
        }
        a.button:hover{
          color: #ffc003;
        }
        .main{
          display: grid;
          grid-template-rows: 1fr auto 1fr;
        }
        .header{
          display: flex;
          justify-content:flex-start;
          height: 12vh;
          padding: 10px;
          background-color: #eee;
          border-radius: 50px;
          box-shadow: 0 40px 30px rgba(50, 50, 50, .30);
        }
        .headerButtons{
          display: flex;
          width: 30%;
          align-items: flex-end;
          justify-content: space-evenly;
        }
        .logo{
          display: flex;
          align-items: flex-end;
          color: #eee;
        }
        .menu{
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          align-items: center;
          padding: 50px;
        }
        .item{
          display: flex;
          align-items: flex-end;
          background-color: #fff;
          width: 200px;
          height: 250px;
          padding: 50px;
          margin-bottom: 50px;
          flex-direction: column;
          border-radius: 10px;
          box-shadow: 0 20px 20px rgba(50, 50, 50, .3);
          transition: .4s;
        }
        .item:hover{
          box-shadow:none;
        }
        .footer{
          display: block;
          height: 10vh;
          background-color: #aaa;
        }
          .form{
            display: flex;
            align-items: center;
            flex-direction: column;
            margin: 100px auto;
            padding: 40px;
            width: 20%;
            height: 60%;
            background-color: #fff ;
            box-shadow: 0 20px 30px 5px rgba(50, 50, 50, .30);
            border-radius: 10px;
            font-size: 2vh;
            font-family: 'Poppins', sans-serif;
            color: #444;
          }
          .form input{
            margin: 5px 0 15px 0;
            width: 200px;
            height: 30px;
            background-color: #eee;
            font-size: 20px;
            border-radius: 5px;
            border: none;
            border-bottom: 3px solid #aaa;
          }
          input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        </style>
    </head>
    <body class="antialiased">
      <div class="main">
        <div class="header">
          <div class="headerButtons">
            <a href="/" class="button">HOME</a>
            <a href="/form" class="button">FOOD FORM</a>
            <a href="/user" class="button">USER FORM</a>
          </div>
          <div class="logo">
            <h1>logo</h1>
          </div>
        </div>
        @yield('content')
        <div class="footer"></div>
      </div>
    </body>
</html>
