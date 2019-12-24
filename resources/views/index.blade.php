<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
      <!-- bootstrap cdn  -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
      <!-- bootstrap end -->
      
      <link rel="stylesheet" href="css/maincss.css">
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
                    <a href="location"style="color:white;"><h6 class="location">Find the Location</h6></a>
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
            <li class="nav-item active mt-2">
              <a class="nav-link" href="check"><b>Home</b> &nbsp;&nbsp; &nbsp;  <span class="sr-only">(current)</span></a>
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
             
              <li class="nav-item mt-2">
                <a class="nav-link" href="contact">Contact &nbsp; &nbsp; &nbsp; </a>
              </li>
              <!-- login  -->
            
              <!--  -->
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

            <li class="nav-item mt-2 ">
                <a class="nav-link">User Name: {{ Auth::user()->name }} &nbsp; &nbsp; &nbsp; </a>
              </li>
          
          </ul>
          
        </div>
      </nav>
      </div>
      </div>
    <!-- endnavbar -->
    <!-- front image -->
    <div class="container-fluid hero-image" style="background-image: url('images/doc.jpg');">
        <div class="container">
                <div class="row">
                        <div class="col-md-4 rowspace">
                            <h2><B>MEDICAL CENTER</B></h2>
                        </div>
                </div>
                <div class="row">
                <div class="col-md-6 MT-5">
                        <h2><b>SKILL TO HEAL</b></h2><br>
                        <h4><b>IT IS PART OF THE CURE<br>
                            TO WANT TO BE CURED</b></h4>
                            <br>
                            <p><b>Medicines cure diseases but only Doctors can cure patients.</b></p>
                            <p>The Instant Cure by professional doctors only for you. So, hurryup! and consult with your nearest doctors for your instant recovery.<br><br><mark> Best Doctors only for you.</mark></p></p>
                            <a href="doctor"><button type="button" class="btn btn-info">Make an Appointment</button></a>
                </div>
                </div>
        </div>
    </div>
    <!-- frontimage end -->
<!--start of the cards -->
      <div class="container-fluid ca1">
<br>
      </div>
    <div class="container-fluid card-col">
        <div class="container">
          <div class="row">
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Neurology Service</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/br.jpg" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Neurology deals with the diagnosis
                               and treatment of all diseases involving the central and 
                               peripheral nervous system.
                    </p>
                   
                  </div>
                </div>
              </div>
              <!-- md4 end -->
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Dental Clinic</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/t.png" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Dentistry deals with the diagnosis
                               and treatment of all diseases and disorders involving the oral cavity.
                    </p>
                   
                  </div>
                </div>

              </div>
              <!-- md4 end -->
              <div class="col-md-4 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title"><h6><b>Child Clinic</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/girl.png" height="40px" width="40px" alt=""></h6>
                   <hr>
                  
                    <p class="card-text text-justify">Pediatrics deals with the diagnosis
                               and treatment of all diseases concerning infant, children and adolescents.
                    </p>
                   
                  </div>
                </div>
              </div>
                <!-- md 4 end -->
            </div>
          <!-- row end -->
        </div>
    </div>
    <div class="container-fluid ca1">
      <br>
            </div>
<!-- end of cards -->
<!-- doctors start -->
<div class="container-fluid bg-light">
  <div class="container">
    <div class="row">
<div class="col-md-12 mt-3 text-center">
<h2><b>InstantCure
  Experienced Doctors</b></h2>
</div>
    </div>
    <!-- row end -->
  </div>
  <!-- container end -->

  <div class="container">
<div class="row">
  <div class="col-md-4 col-sm-4 mt-3 mb-5">
    <div class="card" >
      <img src="images/doc1.jpg" class="card-img-top" alt="no">
      <div class="card-body">
        <h5 class="text-center"><b>Dr Shaun Murphy </b></h5>
        <p class="text-center"><b>Neurosurgeon</b></p>
        <hr>
        <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="https://www.facebook.com/" style="color:black;"> <i class="fa fa-facebook mr-1"></i></a>
                   <a href="https://www.instagram.com/" style="color:black;">  <i class="fa fa-instagram mr-1"></i></a>
                   <a href="https://twitter.com/" style="color:black;"> <i class="fa fa-twitter mr-1"></i></a>    
          </p>

       
      </div>
    </div>
  </div>
<!-- md 4 end -->
<div class="col-md-4 col-sm-4 mt-3 mb-5">
  <div class="card">
    <img src="images/doc2.jpg" class="card-img-top" alt="no">
    <div class="card-body">
      <h5 class="text-center"><b>Dr Drake Ramorey</b></h5>
      <p class="text-center"><b>Dentist</b></p>
      <hr>
      <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://www.facebook.com/" style="color:black;"> <i class="fa fa-facebook mr-1"></i></a>
                   <a href="https://www.instagram.com/" style="color:black;">  <i class="fa fa-instagram mr-1"></i></a>
                   <a href="https://twitter.com/" style="color:black;"> <i class="fa fa-twitter mr-1"></i></a>    
        </p>

     
    </div>
  </div>
</div>
<!-- col md end -->
<div class="col-md-4 col-sm-4 mt-3 mb-5">
  <div class="card">
    <img src="images/doc3.jpg" class="card-img-top" alt="no">
    <div class="card-body">
      <h5 class="text-center"><b>Dr Meridith Grey</b></h5>
      <p class="text-center"><b>Child Specialist</b></p>
      <hr>
      <p><i class="fa fa-mobile mr-3">&nbsp;&nbsp;+1 631 127 8042</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="https://www.facebook.com/" style="color:black;"> <i class="fa fa-facebook mr-1"></i></a>
                   <a href="https://www.instagram.com/" style="color:black;">  <i class="fa fa-instagram mr-1"></i></a>
                   <a href="https://twitter.com/" style="color:black;"> <i class="fa fa-twitter mr-1"></i></a>    
        </p>

     
    </div>
  </div>
</div>
<!-- colmd 4 end -->
</div>
  </div>
  <!-- container end -->
</div>
<!-- doctor end -->

<!--table start-->

<!-- section 2 -->
<div class="conatiner-fluid bco pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 style="color: black;">Search Doctors</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example" class="display nowrap" style="width:100%;">
            <thead class="mt-4">
            <!-- some upper change -->

            <!-- end upper change -->

            <tr class="text-center bg-light headtable" >

                <th class="bg-info">#</th>
                <th class="bg-info">Doctor Name:</th>
                <th class="bg-info">Time available at:</th>

            </tr>
            </thead>

            <tbody>
            <tr class="text-center bg-light">

                <td>1</td>
                <td>Dr Shaun Murphy
                </td>
                <td>11:00 am to 3:00 pm</td>

            </tr>





            <tr class="text-center bg-light">

                <td>2</td>
                <td>Dr Drake Ramoray
                </td>
                <td>6:00pm to 9:00pm</td>


            </tr>


            <tr class="text-center" style="background-color: white;">

                <td>3</td>
                <td>Dr Meredith Grey
                </td>
                <td>12:00 pm to 4:00 pm</td>


            </tr>


            <tr class="text-center bg-light">

                <td>4</td>
                <td>Dr Jake Peralta
                </td>
                <td>10:00 am to 1:00 pm</td>


            </tr>

            <tr class="text-center" style="background-color: white;">

                <td>5</td>
                <td>Dr Elizabeth Blackwell
                </td>
                <td>7:00 pm to 9:00 pm</td>


            </tr>

            <tr class="text-center bg-light">

                <td>6</td>
                <td>Dr John Fraday
                </td>
                <td>1:00 pm to 5:00 pm</td>


            </tr>
            </tbody>

        </table>

    </div>
    <!-- table pagination end -->

</div>
<!-- section2 -->
<!--table end-->
<!--script-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<!--script end-->

<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {

            "iDisplayLength": 10,
            "lengthMenu": [[10,25,50,100], [10,25,50,100]],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        } );
    } );

</script>

<!-- emergency call -->
<div class="container-fluid tel" style="background-image: url('images/telephone.jpg');">
<div class="container">
<div class="row">
<div class="col-md-12 text-white text-center">
<h3 class="mar"><b>Emergency Hotline</b></h3>
<br>

<h1 style="font-weight: 100; "><b>(+92) – 06 133 6951</b></h1>
<br>
<p><b>We provide 24/7 customer support. Feel free to contact us
  in any emergency case.</b></p>
  <br><br><br>
</div>
</div>
<!-- row end -->
</div>
<!-- end container -->
</div>
<!-- end emergency -->
<!-- footer -->
<footer>
  <div class="container-fluid bg-light">
<div class="container">
<div class="row">
  <div class="col-md-4 mar mb-5">
<h5><b>Newsletter</b></h5>
<p class="mt-3"><b>To know the latest services, send your email to us!</b></p>
<div class="form-group mt-3">
  <input type="email" class="form-control" placeholder="enter email address" required="required"/><br>
  <a href=""><button class="btn btn-info">Submit</button></a>
</div>
  </div>

  <div class="col-md-8">

  </div>
</div>
<hr>
</div>
<!-- container end  -->
<div class="container">
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
</footer>
<!-- footer end -->
</body>
</html>