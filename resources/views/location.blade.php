<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="css/doctorcss.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <!--header-->
   <div class="container-fluid text-white backco">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
            <a href="mail"style="color:white;"><p><i class="fa fa-envelope mr-3" ></i>mehakubaid98@gmail.com
                  </p> </a>   
            </div>
            <!-- 3 md end -->
            <div class="col-md-6 mt-3 text-right">
            <a href="https://www.facebook.com/" style="color:white;"> <i class="fa fa-facebook mr-3"></i></a>
                   <a href="https://www.instagram.com/" style="color:white;">  <i class="fa fa-instagram mr-3"></i></a>
                   <a href="https://twitter.com/" style="color:white;"> <i class="fa fa-twitter mr-3"></i></a>     
            </div>
            <!-- 6 md end -->
        </div>
    </div>
</div>
<!-- header end -->

<!-- navbar -->
<div class="container-fluid bg-light">
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/new_png.png" height="70" width="70" alt="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item  mt-2">
          <a class="nav-link" href="check">Home &nbsp;&nbsp; &nbsp;</a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link" href="about">About &nbsp; &nbsp; &nbsp; </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="department">Department &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item active mt-2">
            <a class="nav-link" href="doctor" style="color:grey;">Doctors &nbsp; &nbsp; &nbsp; <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item active mt-2">
            <a class="nav-link" href="buymedicine" style="color:grey;">Purchase Medicine &nbsp; &nbsp; &nbsp;  <span class="sr-only">(current)</span> </a>
          </li>
          <a class="nav-link mt-2" href="payment">Payment &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" href="contact">Contact &nbsp; &nbsp; &nbsp; </a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Setting</button>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           
           
            <a  class="dropdown-item"href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></a>
            
          </div>
        </li>
      
      </ul>
    </div>
  </nav>

  <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                    <h1><b>Our Location</b></h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.915421640428!2d72.82405211505746!3d33.68525414442772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa235dd1d5307%3A0xe2a8ebb5a747b12e!2sMedical%20Center!5e0!3m2!1sen!2s!4v1575201313573!5m2!1sen!2s" style="margin-top:200px;" width="900" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
  
  
</body>
</html>