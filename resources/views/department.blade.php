<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="css/departmentcss.css">
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
            <div class="col-md-3 mt-3 text-center">
                <a href="location" style="color:white;"><h6 class="location">Find the Location</h6></a>
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
        <li class="nav-item active mt-2">
            <a class="nav-link" href="department"><b>Department</b> &nbsp; &nbsp; &nbsp;  <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" href="doctor">Doctors &nbsp; &nbsp; &nbsp; </a>
          </li>
          <li class="nav-item active mt-2">
            <a class="nav-link" href="buymedicine" style="color:grey;">Purchase Medicine&nbsp; &nbsp; &nbsp;  <span class="sr-only">(current)</span> </a>
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
  </div>
  </div>
<!-- endnavbar -->
<!-- about start -->

        <div class="container-fluid">
            
            <div class="container">
                
              <div class="row">
                  
                </div>
              <!-- row end -->
            </div><div class="col-md-12 mt-3 text-center ">
                    <h2><b>Department</b></h2>
                    <p>We love to provide our people the best departments for the curing services.</p>
            </div>
           
        </div>
      
<!-- end about --> 
<!-- start inspiring -->
<div class="container-fluid text-white card-col">
    <div class="container-fluid ca1">
        <br>
              </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                    <h1><b>Inspiring
                        Health Services</b></h1><br><br>
            </div>
        </div>
    </div>
    <div class="container-fluid ca1">
        <br>
              </div>
</div>
 <!--end inspiring  -->
 <!-- start cards -->

        <div class="container-fluid bg-light">
            <div class="container">
              <div class="row">
                  <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><h6><b>Neurology Department</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/br.jpg" height="40px" width="40px" alt=""></h6>
                       <hr>
                      
                        <p class="card-text text-justify">Neurology deals with the diagnosis
                               and treatment of all diseases involving the central and 
                               peripheral nervous system.</p>
                       
                      </div>
                    </div>
                  </div>
                  <!-- md4 end -->
                  <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><h6><b>Dentistry Department</b>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/t.png" height="40px" width="40px" alt=""></h6>
                       <hr>
                      
                        <p class="card-text text-justify">Dentistry deals with the diagnosis
                               and treatment of all diseases and disorders involving the oral cavity.</p>
                       
                      </div>
                    </div>
    
                  </div>
                  <!-- md4 end -->
                  <div class="col-md-4 mt-5 mb-5">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title"><h6><b>Pediatrics Department</b>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/girl.png" height="40px" width="40px" alt=""></h6>
                       <hr>
                      
                        <p class="card-text text-justify">Pediatrics deals with the diagnosis
                               and treatment of all diseases concerning infant, children and adolescents.</p>
                       
                      </div>
                    </div>
                  </div>
                    <!-- md 4 end -->
                </div>
              <!-- row end -->
               
                <div class="row">
                    <div class="col-md-4 mt-5 mb-5">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><h6><b>Ophthalmology Department</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/eye.png" height="40px" width="40px" alt=""></h6>
                         <hr>
                        
                          <p class="card-text text-justify">Ophthalmology deals with the diagnosis 
                                    and treatment of all diseases and disorders related to the eye.</p>
                         
                        </div>
                      </div>
                    </div>
                    <!-- md4 end -->
                    <div class="col-md-4 mt-5 mb-5">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><h6><b>Dermatology Department</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/de.png" height="40px" width="40px" alt=""></h6>
                         <hr>
                        
                          <p class="card-text text-justify">Dermatology deals with the diagnosis 
                               and treatment of all diseases and some cosmetic problems of the skin.</p>
                         
                        </div>
                      </div>
      
                    </div>
                    <!-- md4 end -->
                    <div class="col-md-4 mt-5 mb-5">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title"><h6><b>Cardiology Department</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/heart.png" height="40px" width="40px" alt=""></h6>
                         <hr>
                        
                          <p class="card-text text-justify">Cardiology deals with the diagnosis 
                               and treatment of all diseases of the heart as well as some parts of the ciculatory system.</p>
                         
                        </div>
                      </div>
                    </div>
                      <!-- md 4 end -->
                  </div>

            </div>
        </div>
       
 <!-- end cards -->
<br><br><br>

  <!-- footer -->
    
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-md-4 mb-4">
       Copyright ©2019 
      </div>
      <div class="col-md-8 text-right">
      <a href="https://www.facebook.com/" style="color:black;"> <i class="fa fa-facebook mr-3"></i></a>
                   <a href="https://www.instagram.com/" style="color:black;">  <i class="fa fa-instagram mr-3"></i></a>
                   <a href="https://twitter.com/" style="color:black;"> <i class="fa fa-twitter mr-3"></i></a>    
      </div>
    </div>
   
     </div>
<!-- footer end -->
</body>
</html>