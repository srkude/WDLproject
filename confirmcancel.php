<?php
session_start();
?>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Sonsie+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
    <!-- CSS file -->
    <link rel="stylesheet" type="text/css" href="confirmcancel.css">



  <title>Boss Airlines- Confirm Cancellation</title>
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
    
            <a href="index.html"><img src="black_logo.png" id="logo1"></a>  
        </div>
    
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <div class="nav navbar-nav">
            <!-- Creating list and tdeir links  -->
            <li><a href="index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact us</a></li>
          </div>
    
    
          <div class="nav navbar-nav navbar-right">
            <li><a href="#">Login <i class="fas fa-sign-in-alt"></i></a></li>
            <li><a href="#">Signup <i class="fas fa-user-plus"></i></a></li>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar ends -->
  <br><br><br><br>

  <div id="container2"><h3>Confirm Your Cancellation</h3></div>
  <hr>


  <form method="get">
      <div id="container">
           <div><img src="black_logo.png" id="logo1">
         <span id="bp"><b>BOARDING PASS</b></span></div>
         <br>
         <br>


      

           <table>
             <tr id="t_head">
               <td id="td">Flight No.</td>
               <td id="td">Source</td>
               <td id="td">Destination</td>
              <td id="td">Class</td>

              </tr>
              <tr id="t_value">
                <td class="info_td" id="td"><?php echo$_SESSION['cflightno'] ?></td>
                 <td class="info_td" id="td"><?php echo$_SESSION['csource'] ?></td>
                 <td class="info_td" id="td"><?php echo$_SESSION['cdest'] ?></td>
                 <td  class="info_td" id="td" ><?php echo$_SESSION['cclass'] ?></td>
              </tr>
            <br><br>
             <tr id="t_head">
               <td id="td">Ticket No.</td>
               <td id="td">Date</td>
               <td id="td">Arrival time</td>
               <td id="td">Departure time</td>
              </tr>
              <tr id="t_value">
                <td class="info_td" id="td"><?php echo$_SESSION['centeredticketid'] ?></td>
                <td class="info_td" id="td"><?php echo$_SESSION['cdate'] ?></td>
               <td class="info_td" id="td"><?php echo$_SESSION['cat'] ?></td>
               <td  class="info_td" id="td"><?php echo$_SESSION['cdt'] ?></td>
              </tr>
            </table>

                 

       <br><br>

        

<?php 
if ($_SESSION['cnoofpass'] > 0 )
{ 
     echo "Passenger 1";
     echo "<br><br>";
          echo "<table>";
           echo "<tr id='t_head'>";
            echo "<td class='info_td' id='td'>";
            echo "Name";
            echo "</td>";
            echo"<td class='info_td' id='td'>";
               echo"Age";
               echo"</td>";
                echo "<td class='info_td' id='td'>";
               echo "Seat No.";
               echo "</td>";
             echo "</tr>";
             echo "<tr id='t_value'>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['ctitle1'];
        echo"&nbsp; ";
        echo $_SESSION['cfn1'];
        echo"&nbsp; ";
        echo $_SESSION['cln1'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cage1'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cseatno1'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
      
      echo "<br>";

if ($_SESSION['cnoofpass'] > 1 )
{ 
     echo "Passenger 2";
     echo "<br><br>";
          echo "<table>";
           echo "<tr id='t_head'>";
            echo "<td class='info_td' id='td'>";
            echo "Name";
            echo "</td>";
            echo"<td class='info_td' id='td'>";
               echo"Age";
               echo"</td>";
                echo "<td class='info_td' id='td'>";
               echo "Seat No.";
               echo "</td>";
             echo "</tr>";
             echo "<tr id='t_value'>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['ctitle2'];
        echo"&nbsp; ";
        echo $_SESSION['cfn2'];
        echo"&nbsp; ";
        echo $_SESSION['cln2'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cage2'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cseatno2'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}   
        echo "<br>";

      
 
if ($_SESSION['cnoofpass'] > 2 )
{ 
     echo "Passenger 3";
     echo "<br><br>";
          echo "<table>";
           echo "<tr id='t_head'>";
            echo "<td class='info_td' id='td'>";
            echo "Name";
            echo "</td>";
            echo"<td class='info_td' id='td'>";
               echo"Age";
               echo"</td>";
                echo "<td class='info_td' id='td'>";
               echo "Seat No.";
               echo "</td>";
             echo "</tr>";
             echo "<tr id='t_value'>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['ctitle3'];
        echo"&nbsp; ";
        echo $_SESSION['cfn3'];
        echo"&nbsp; ";
        echo $_SESSION['cln3'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cage3'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cseatno3'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
        echo "<br>";

      
 
if ($_SESSION['cnoofpass'] > 3 )
{ 
    echo "Passenger 4";
     echo "<br><br>";
          echo "<table>";
           echo "<tr id='t_head'>";
            echo "<td class='info_td' id='td'>";
            echo "Name";
            echo "</td>";
            echo"<td class='info_td' id='td'>";
               echo"Age";
               echo"</td>";
                echo "<td class='info_td' id='td'>";
               echo "Seat No.";
               echo "</td>";
             echo "</tr>";
             echo "<tr id='t_value'>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['ctitle4'];
        echo"&nbsp; ";
        echo $_SESSION['cfn4'];
        echo"&nbsp; ";
        echo $_SESSION['cln4'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cage4'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['cseatno4'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
    

?>

    
 </form>
  <br>

  <form method="post" action="authenticateC3.php">
      
        <br>
        <label for='mobno'>Phone number</label> &nbsp;&nbsp;&nbsp;
           <input type="mobile" placeholder="mobile number" name='typedmobno' required>
           <br><br>
        <label for="email">Email ID</label> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" placeholder="email address" name='typedemail' required>
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="submit" id="button2" value="Cancel Ticket" style="color:blue"></input>
        <!--<button type="button" class="btn btn-danger">Confirm Cancellation</button></a>-->

      </div>
  </form>


  
  
  


  <br><br>


<!-- Footer -->
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
              <a href="index.html"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="links">
              <a href="#!"><i class="fas fa-globe-americas"></i>About Us</a>
            </li>
            <li class="links">
              <a href="#!"><i class="fas fa-question-circle"></i>FAQs</a>
            </li>
            <li class="links">
              <a href="#!"><i class="fas fa-headset"></i>Contact</a>
            </li>
          </ul>
          </div>
        </div>
        <div class="col-md-4 mx-auto">
          <h5 style="color:#337ab7" class="font-weight-bold text-uppercase mt-3 mb-4">Connect us witd</h5>
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

</body>
</html>