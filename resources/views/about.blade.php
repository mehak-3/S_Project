<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
     <!-- bootstrap cdn  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
     <!-- bootstrap end -->
     
     <link rel="stylesheet" href="css/aboutcss.css">
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
            <li class="nav-item active mt-2">
              <a class="nav-link" href="about"><b>About</b> &nbsp; &nbsp; &nbsp;<span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item mt-2">
                <a class="nav-link" href="department">Department &nbsp; &nbsp; &nbsp; </a>
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
   
            <div class="container-fluid mb-5 card-col">
                <div class="container-fluid ca1">
                    <br>
                          </div>
                <div class="container">
                    
                  <div class="row">
                      
                    </div>
                  <!-- row end -->
                </div><div class="col-md-12 mt-3 text-center text-white ">
                        <h2><b>About Us</b></h2>
                        <p>We provide the best services!</p>
                </div>
                <div class="container-fluid ca1">
                    <br>
                          </div>
            </div>
          
    <!-- end about -->
    <!-- information -->
    <div class="container-fluid" style="background-image: url(images/aboutbac.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/aboutmain.png" height="400" width="500" alt="">
                </div>

                <div class="col-md-6 mt-5">
                    <h1><b>InstantCure<br>
                        Services</b></h1>
                        <p class="mt-3" style="color: rgb(33, 43, 133);">Our services are entrusted by world renowned doctors.</p>
                        <p class="mt-3" style="color: rgb(52, 66, 77);"></p>Diagnosis are always accurate and we specialise in many departments, including Cardiology, Neurology, Pediatrics, Ophthalmology, Dentistry, and Dermatology.</p>
                    </div>
            </div>
        </div>
    </div>
    <!-- information end -->

    <!-- question start -->
    <div class="container-fluid mb-3 card-col">
        <div class="container-fluid ca1">
            <br>
                  </div>
        <div class="container">
            
          <div class="row">
              
            </div>
          <!-- row end -->
        </div><div class="col-md-12 mt-3 text-center text-white ">
                <h2><b>Have Some Question?</b></h2>
                
        </div>
        <div class="container-fluid ca1">
            <br>
                  </div>
                  <!-- end -->
                 
    </div>
    <div class="container-fluid">
        <div class="container">
            <a class="mt-4"  href="#welcomeDIV" onclick="showDiv()">How much one year plan subscription costs?</a>

            <div id="welcomeDiv"  style="display:none;" class="answer_list" >
                It costs upto $190.5 per year subscription.
            </div>
                <hr>
                <a class="mt-4"  href="#welcomeDIV1" onclick="showd()">How the appointments are scheduled?</a>

            <div id="welcomeDiv1"  style="display:none;" class="answer_list" >
                When patient makes an appointment, our team look
                 for the availability of the doctor and then notifies to the patient about the appointment approval.
            </div>
            <hr>
            <a class="mt-4"  href="#welcome" onclick="yes()">Which type of services are offered?</a>

        <div id="welcome"  style="display:none;" class="answer_list" >
            It includes: Neurology, Cardiology, Pediatrics, Ophthalmology, Dentistry, and Dermatology.
        </div>

        <hr>
        <a class="mt-4"  href="#welcomefour" onclick="four()">In severe conditions, what do I need to bring to the hospital?</a>

    <div id="welcomefour"  style="display:none;" class="answer_list" >
        All the diagnosis reports must be brought.
    </div>

    <hr>
    <a class="mt-4"  href="#yesfive" onclick="yfive()"> Do this site deliver medicines at home? If yes then tell whether the medicines are original or not?</a>

<div id="yesfive"  style="display:none;" class="answer_list" >
    Yes! We do. The medicines are 100% authentic. We deliver from our own pharmacy.
</div>
          </div>
    </div>
    <br><br><br><br>
    <!-- question end -->
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
<script>
function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}

</script>
<script>
    function showd() {
       document.getElementById('welcomeDiv1').style.display = "block";
    }
    
    </script>
<script>
    function yes() {
       document.getElementById('welcome').style.display = "block";
    }
    
    </script>

<script>
    function four() {
       document.getElementById('welcomefour').style.display = "block";
    }
    
    </script>
    <script>
        function yfive() {
           document.getElementById('yesfive').style.display = "block";
        }
        
        </script>
</html>