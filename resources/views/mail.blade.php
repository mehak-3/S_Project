<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="css/mail.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <!--header-->
   <div class="container-fluid text-white backco">
    <div class="container">
        <div class="row">
            <!-- 3 md end -->
            <div class="col-md-3 mt-3 text-center">
                <a href="location"><h6 class="location">Find the Location</h6></a>
            </div>
            <!-- 3 md end -->
            <div class="col-md-6 mt-3 text-right">
            <a href="https://www.facebook.com/" style="color:black;"> <i class="fa fa-facebook mr-3"></i></a>
                   <a href="https://www.instagram.com/" style="color:black;">  <i class="fa fa-instagram mr-3"></i></a>
                   <a href="https://twitter.com/" style="color:black;"> <i class="fa fa-twitter mr-3"></i></a>      
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
        <li class="nav-item mt-2">
          <a class="nav-link" href="check">Home &nbsp;&nbsp; &nbsp;  </a>
        </li>
        <li class="nav-item mt-2">
          <a class="nav-link" href="about">About &nbsp; &nbsp; &nbsp; </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="department">Department &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" href="doctor">Doctors &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item active mt-2">
            <a class="nav-link" href="buymedicine" style="color:grey;">Purchase Medicine &nbsp; &nbsp; &nbsp;  <span class="sr-only">(current)</span> </a>
          </li>
          <a class="nav-link mt-2" href="payment">Payment &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item active  mt-2">
            <a class="nav-link" href="contact"><b>Contact</b> &nbsp; &nbsp; &nbsp; <span class="sr-only">(current)</span></a>
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
  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-5">
                <form action= "mailto:mehakubaid98@gmail.com" method="post" enctype="text/plain">
                    <div class="form-group">
                        <input type="text" id="fname" name="firstname" class="form-control" placeholder="First Name" required="required">
                    </div>  
                    <div class="form-group">
                        <input type="text" id="lname" name="lastname" class="form-control" placeholder="Last Name" required="required">
                    </div>           
                    <div class="form-group">
                        <input type="text" id="sub" name="subject" class="form-control" placeholder="Subject" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" id="cell" name="cellno" class="form-control" placeholder="Cell-#" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text"id="land" name="landno" class="form-control" placeholder="Landline-# or Alternative-#" required="required">
                    </div>
                    <div class="form-group">

                        <textarea class="form-control" id="msg" name="message" rows="6" id="comment" placeholder="Message"></textarea>
                    </div>
                         
                    <label for="country">Country:</label>
            <select id="country" name="country">
            <option value="pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Turkey">Turkey</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="usa">England</option>
            <option value="usa">China</option>
            <option value="usa">Russia</option>
            </select><br>
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="male"> Male
<input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="other"> Other
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">DONE</button>
                    </div>
                      </form>

            </div>

  </div>
  </div>
</body>
</html>