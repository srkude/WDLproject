<!DOCTYPE html>
<html>
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



  <title>BOSS Airlines</title>
</head>
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
    
            <a href="index.php"><img src="black_logo.png" id="logo1"></a>  
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="nav navbar-nav">
            <!-- Creating list and their links  -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact us</a></li>
          </div>
         <div class="nav navbar-nav navbar-right">
            <li><a href=cancel_ticket.php#">Cancel Ticket </a></li>
            </div>
    
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar ends -->

  <!-- Carousel -->
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="airline_img.png" alt="Airplane" style="width:100%;height:100%;">
      </div>
      <div class="item">
        <img src="mumbai_img.png" alt="Mumbai" style="width:100%;height=100%;">
          <div class="carousel-caption">
             <em style="font-family: cursive;font-size:50px;color:whitesmoke;align-content: stretch;">MUMBAI</em>
      </div>
      </div>
      <div class="item">
        <img src="delhi_img.png" alt="Delhi" style="width:100%;height=100%;">
          <div class="carousel-caption">
             <em style="font-family: cursive;font-size:50px;color:wheat;align-content: stretch;">DELHI</em>
      </div>
      </div>
     <div class="item">
        <img src="kolkata_img.png" alt="Kolkata" style="width:100%;height=100%;">
          <div class="carousel-caption">
             <em style="font-family: cursive;font-size:50px;color:wheat;align-content: stretch;">KOLKATA</em>
      </div>    
      </div>
    <div class="item">
        <img src="chennai_img.png" alt="Chennai" style="width:100%;height=100%;">
         <div class="carousel-caption">
             <em style="font-family: cursive;font-size:50px;color:wheat;align-content: stretch;">CHENNAI</em>
      </div>
    </div>
      </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  <!-- End of carousel -->


  <!-- Flights form -->
  <div id="container2"><h3>Find Flights<i class="fas fa-plane-departure"></i></h3></div>


  <form name="demo_form" method="post" action="authenticate1.php">
    <div id="container">
    <label for="source">Source</label>
    <div><select name="source" required id="select1">
      
      <option value="" disabled selected>Select</option>
        <option value="MUMBAI">MUMBAI</option>
        <option value="CHENNAI">CHENNAI</option>
        <option value="DELHI">DELHI</option>
        <option value="KOLKATA">KOLKATA</option>
    </select>
    </div>
    <br>

    <label for="destination">Destination</label>
    <div><select name="dest" required id="select2">
      
      <option value="" disabled selected>Select</option>
        <option value="MUMBAI">MUMBAI</option>
        <option value="CHENNAI">CHENNAI</option>
        <option value="DELHI">DELHI</option>
        <option value="KOLKATA">KOLKATA</option>
    </select>
    </div>
    <br>


    <label for="doj">Date of Journey</label>
    <div>
      <?php
   $today = date("Y-m-d");
   echo "<input type='date' id='myDate' min=$today name='Jdate' value='1' required>";
   ?>
   </div>

    <br>
    <label for="nop">No. of passengers</label>
    <div><select name="noofpass" required>
      
      <option value="" disabled selected >0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    </div>
    <br>
    <label for="class">Class</label>
    <select name="class" required>
      <option value="" disabled selected >Class</option>
        <option value="Economy">Economy</option>
        <option value="Business">Business</option>
    </select>
    <br><br>
    <!-- <input type="Submit" name="b1" value="Continue" > -->
    <button type="submit" class="btn btn-success" name="b1">Submit</button>&nbsp;&nbsp;&nbsp;
    <button type="reset" class="btn btn-secondary" onclick="myFunction()" value="Reset form">Reset</button>
  </div>
  </form>
  <!-- End of flight form -->

  <!-- Featured Destination -->

  <div class="container">
    <div class="ur-page-header ">
      <h3> Featured destinations</h3>
        <hr class="style14">


      
    </div>
    
  </div>
  <div class="container">
    <div class="content1">
      <div class="row">
      <div class="col-sm-6">

        <div class="thumbnail" data-aos="zoom-in">
          <a href="chennai.html"><img src="pic1.jpg"></a>
        </div>
        <div data-aos="zoom-in">
          <h4>Marina Beach</h4>
          <h2>Chennai</h2>
        </div>
        
      </div>
      <div class=" col-sm-6">
        <div class="thumbnail" data-aos="zoom-in">
          <a href="delhi.html"><img src="pic2.jpg"></a>
        </div>
        <div data-aos="zoom-in">
          <h4>Humayun's Tomb</h4>
          <h2>Delhi</h2>
        </div>
      </div>

      <div class=" col-sm-6">
        <div class="thumbnail" data-aos="zoom-in">
          <a href="kolkata.html"><img src="pic3.jpg"></a>
        </div>
        <div data-aos="zoom-in">
          <h4>Howrah Bridge</h4>
          <h2>Kolkata</h2>
        </div>
        
      </div>

      <div class=" col-sm-6">
        <div class="thumbnail" data-aos="zoom-in">
          <a href="mumbai.html"><img src="pic4.jpg"></a>
        </div>
        <div data-aos="zoom-in">
          <h4>Gateway of India</h4>
          <h2>Mumbai</h2>
        </div>
        <br><br>
        
      </div>
    </div>
    </div>
    <!-- End of featured destination -->

    <!-- Footer  -->
    </div>
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
<!-- AOS file -->
<div class="box" data-aos="zoom-in"></div>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script type="text/javascript">
     AOS.init(
      {
        duration:1200
      });
      
      $('#select1, #select2').on('change',
    function () {
        if ($('#select1').val() == $('#select2').val()) {
            alert("Please Select Different Source/Destination");
            $('#select2').val("disabled","true");
        }
        else {
            // Remove message if displayed
        }
    }
);
  </script>

</body>
</html>