<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
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


    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="styles.css">



  <title>BOSS Airlines- Passenger Details</title>
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
    
            <a href="#"><img src="black_logo.png" id="logo1"></a>  
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
  <br><br><br>

 
  <!--passenger details-->
  
    <br><h3><i class="fas fa-users"></i> &nbsp;Passenger Details </h3>
    <br>
    <h4 id="pi">Please enter the information below for all passengers on this itinerary and click on Proceed</h4>   <br> 
    <div id="container_pd">
    <div class="trip_summ ">
      <table >
        <tr>
          <td>Trip summary</td>
          <td><?php echo$_SESSION['source'] ?><i class="fas fa-angle-double-right"></i></td>
          <td id="source"><?php echo$_SESSION['dest'] ?></td>
          <td colspan="3" id="show_details">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show details  &nbsp;&nbsp;&nbsp;&nbsp;<span ><i class="fas fa-angle-double-down"></i></span></td>
        </tr>
        
        <tr class="hidden_details">
          <td class="hidden_td" id="hidden_td">From</td>
          <td class="hidden_td" id="hidden_td">To</td>
          <td class="hidden_td" id="hidden_td">Arrival Time</td>
          <td class="hidden_td" id="hidden_td">Departure Time</td>
          <td class="hidden_td" id="hidden_td">No. of passengers</td>
          <td class="hidden_td" id="hidden_td">Class</td>
          
        </tr>
        <tr class="hidden_details">
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['source'] ?></td>
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['dest'] ?></td>
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['arrtime'] ?></td>
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['depttime'] ?></td>
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['noofpass'] ?></td>
          <td class="hidden_td" id="hidden_td"><?php echo$_SESSION['class'] ?></td>
          
        </tr>
      </table>
      
    </div>  




  </div>
  <!-- Input passenger data -->
  <form name="pass_details_form" method="post" action="authenticate3.php">
    <br>
    <div class="container_fd">

      <div class="passenger_info">
          <h3 class="no_margin">&nbsp;Passenger details</h3>

        <hr class="hrstyle"><br>
        <div class="info">
           <?php 

    if ($_SESSION['noofpass'] > 0 )
    {
    echo " 
    <label for='p1'>Passenger 1</label>
    <div>

    <select name='title1' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
          </select>
    </div>

    <div>
      <input class='labels' type='text' placeholder='first name' name='fn1'  required>
      
    </div>
     <div>
      <input class='labels' type='text' placeholder='last name' name='ln1' required>
      
    </div>

    <div>
      <input class='labels' type='text' pattern='[0-9]{2}' title='Example:01' placeholder='age' name='age1' required>
      
    </div>
    
    "; } ?>

    <br>
    <?php 
    if ($_SESSION['noofpass'] > 1)
    {
    echo " 
    <label for='p1'>Passenger 2</label>
    <div>

    <select name='title2' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
          </select>
    </div>

    <div>
      <input class='labels' type='text' placeholder='first name' name='fn2'  required>
      
    </div>
     <div>
      <input class='labels' type='text' placeholder='last name' name='ln2' required>
       
    </div>

    <div>
      <input class='labels' type='text' pattern='[0-9]{2}' title='Example:01' placeholder='age' name='age2' required>
      
    </div>
    
       "; } ?>
    <br>

     <?php 
    if ($_SESSION['noofpass'] > 2 )
    {
    echo " 
    <label for='p1'>Passenger 3</label>
    <div>

    <select name='title3' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
          </select>
    </div>

    <div>
      <input class='labels' type='text' placeholder='first name' name='fn3' required>
      
    </div>
     <div>
      <input class='labels' type='text' placeholder='last name' name='ln3' required>
      
    </div>

    <div>
      <input class='labels' type='text' pattern='[0-9]{2}' title='Example:01' placeholder='age' name='age3' required>
      
    </div>
      "; } ?>
    <br>


     <?php 
    if ($_SESSION['noofpass'] > 3 )
    {
    echo " 
    <label for='p1'>Passenger 4</label>
    <div>

    <select name='title4' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
          </select>
    </div>

    <div>
      <input class='labels' type='text' placeholder='first name' name='fn4' required>
      
    </div>
     <div>
      <input class='labels' type='text' placeholder='last name' name='ln4' required>
      
    </div>

    <div>
      <input class='labels' type='text' pattern='[0-9]{2}' title='Example:01' placeholder='age' name='age4' required>
      
    </div>
     " ; } ?>
          
        </div>

        
      </div>
   
    <!-- Contact info -->

    
</div>
<br>

  <div class="container_fd">
    <div class="passenger_info">
      <h3 class="no_margin">&nbsp;Contact information</h3>
      <hr class="hrstyle">
          <div class="info"><label for="mobile">Mobile number</label>
                    <div><input id='id91'type="text" value="+91" disabled>
                              <input class="labels" type="mobile" name="mob" placeholder="mobile number" pattern="[1-9]{1}[0-9]{9}" title="Example: 1234567890" required></div><br>
                      <label for="email">Email Address</label>
                      <div>
                        <input class="labels"type="email" name="email" placeholder="email address" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" required>
          
                      </div></div>




      
    </div>
    
  </div>
  <button type="submit" class="btn btn-success " id="proceed_button">Proceed</button>

  </form>
<br>
<br>

</div>
  

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


<script type="text/javascript" src="page3.js"></script>
</body>
</html>