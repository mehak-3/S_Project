<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>InstantCure</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: linear-gradient(rgb(212,223,235), rgb(4,52,106));
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container-fluid mt-5 ">
        <div class="container ml-1">
        <div class="row">
        <div class="col-md-12">
  <center> <h1><b> Welcome to the InstantCure </b></h1></center>
        </div>
        </div>
        </div>
            <div class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="images/1.jpg"height="500px;"width="500px;">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="images/2.jpg"height="500px;"width="500px;">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="images/3.jpg"height="500px;"width="500px;">
                                  </div>
                                  <div class="carousel-item">
                                        <img class="d-block w-100" src="images/4.jpg"height="500px;"width="500px;">
                                      </div>
                                      <div class="carousel-item">
                                        <img class="d-block w-100" src="images/5.jpg"height="500px;"width="500px;">
                                      </div>
                                      <div class="carousel-item">
                                            <img class="d-block w-100" src="images/6.jpg"height="500px;"width="500px;">
                                          </div>
                                          <div class="carousel-item">
                                            <img class="d-block w-100" src="images/7.jpg"height="500px;"width="500px;">
                                          </div>
                                          <div class="carousel-item">
                                                <img class="d-block w-100" src="images/8.jpg"height="500px;"width="500px;">
                                              </div>
                                              <div class="carousel-item">
                                                <img class="d-block w-100" src="images/9.jpg"height="500px;"width="500px;">
                                              </div>
                                </div>
                              </div>     
                </div>
    </body>
</html>