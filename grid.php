<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Metadata -->
  <meta charset="utf-8">
  <!-- Bootstrap 3-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Icon -->
  <link rel="icon" href="tab_logo.png"/>

  <!-- JQuery -->
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">    
    </script>

    <!-- JS -->
    <script 
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <!-- Font awesome link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">

    <!-- AOS CSS file -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css">

    <!-- Javascript files -->
</head>


<?php

?>

<body>

<!-- Navbar starts -->
  <div class="container">
    <nav class="navbar navbar-inverse navbar-fixed-top">    
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>
    
            <a href="index.html"><img src="black_logo.png" id="logo1"></a>  
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="nav navbar-nav">
            <!-- Creating list and their links  -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact us</a></li>
          </div>
    
    
          <!--<div class="nav navbar-nav navbar-right">
            <li><a href="#">Login <i class="fas fa-sign-in-alt"></i></a></li>
            <li><a href="#">Signup <i class="fas fa-user-plus"></i></a></li>
          </div>-->
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar ends -->
<br><br><br><br>
  <h3>Make a booking</h3>
  <hr class="style14">

  <h3>Your search</h3><br>
    
  <div class="row">
    <div class="col-md-12">
      <div class="details">
    <table>
      <tr>
        <td  >Source &nbsp;&nbsp;&nbsp;&nbsp; <i class="fas fa-angle-double-right"></i></td>
        <td id="source">Destination</td>
        <td ><i class="fas fa-table"></i> &nbsp;Date of Journey</td>
        <td ><i class="fas fa-users"></i> &nbsp;No. of passengers</td>
        <td ><i class="fas fa-briefcase"></i>&nbsp; Class</td>
        
      </tr>
      <tr>
        <td><?php echo$_SESSION['source'] ?></td>
        <td id="source"><?php echo$_SESSION['dest'] ?></td>
        <td><?php echo$_SESSION['date'] ?></td>
        <td><?php echo$_SESSION['noofpass'] ?></td>
        <td><?php echo$_SESSION['class'] ?></td>
      </tr>
    </table>
    
  </div>
      
    </div>
    
  </div>

  <br>

  <div >
    <h3>Flights available <i class="fas fa-plane-departure"></i></h3>
    <hr class="style14">
    <!-- Flights detail -->
    <div id="container_fd">
      <h4 id="container_pd"><?php echo$_SESSION['date'] ?></h4>
      <h4 id="container_pd">(Click on one of the two available flights)</h4>
           
    </div>

    
  </div>
  <br>
  <form method="post" action="authenticate2.php">
    <div class="row">
    <div class="col-md-12">
      <div class="details2">
    <table>
      <tr >
        <td id="top_row"><i class="fab fa-avianex"></i>Flight No.</td>
        <td id="top_row"><i class="fas fa-plane-arrival"></i> Arrival Time</td>
        <td id="top_row"><i class="fas fa-plane-departure"></i> Departure Time</td>
        <td id="top_row"><i class="fas fa-rupee-sign"></i> Price per seat</td>
        <td id="top_row"><i class="fas fa-users"></i> Seats available</td>
        
      </tr>
      <tr class="r1">
        <td><?php echo$_SESSION['FN1'] ?></td>
        <td><?php echo$_SESSION['AT1'] ?></td>
        <td><?php echo$_SESSION['DT1'] ?></td>
        <td><?php echo$_SESSION['SP1'] ?></td>
        <td><?php echo$_SESSION['AS1'] ?></td>
      </tr>
       <tr class="r1">
        <td><?php echo$_SESSION['FN2'] ?></td>
        <td><?php echo$_SESSION['AT2'] ?></td>
        <td><?php echo$_SESSION['DT2'] ?></td>
        <td><?php echo$_SESSION['SP2'] ?></td>
        <td><?php echo$_SESSION['AS2'] ?></td>
      </tr>
    </table>


    
  </div>
  <br>
  <input type="hidden" name="selected" id="selected">
  <button type="button" class="btn btn-success" id="book">Book flight</button>
      
    </div>
    
  </div>
  </form>

  </div>
  <br><br>
  <!-- Footer  -->
<footer class="page-footer font-small stylsh-color-dark pt-4">
    <div class=" text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4"><img id="logof" src="black_logo.png"></h5>
          <p  style="color:white;">BOSS AIRLINES developed by Bhargavi Omkar Shubham Shreyas</p>
        </div>
        <div class="col-md-2 mx-auto center_box" >
          <!-- Links -->
          <h5 style="color:#337ab7" class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
          <div id="links">
          <ul   class="list-unstyled ">
            <li class="links">
              <a href="index.php"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="links">
              <a href="about.html"><i class="fas fa-globe-americas"></i>About Us</a>
            </li>
            
            <li class="links">
              <a href="contactus.html"><i class="fas fa-headset"></i>Contact</a>
            </li>
          </ul>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <h5 style="color:#337ab7" class="font-weight-bold text-uppercase mt-3 mb-4">Connect us with</h5>
          <ul  id="social" class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1 " href="https://www.facebook.com/" target="_blank">
          <i class="fab fa-facebook fa-lg"></i>
        </a> 
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1 " href="https://twitter.com/login?lang=en" target="_blank">
          <i class="fab fa-twitter fa-lg"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1 " href="https://plus.google.com/discover" target="_blank">
          <i class="fab fa-google-plus fa-lg"> </i>
        </a>  
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1 " href="https://in.linkedin.com/" target="_blank">
          <i class="fab fa-linkedin fa-lg"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1 " href="https://www.instagram.com/" target="_blank">
          <i class="fab fa-instagram fa-lg"> </i>
        </a>
      </li>
    </ul>
        </div>
      </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">BOSS Airlines</a>
    </div>
</footer>
<!-- End of footer -->
    <script type="text/javascript" src="page2.js"></script>





</body>
</html>
