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

    <!-- Js code for printing ticket -->
    <script>
      
      function printContent(el){
      var restorepage=document.body.innerHTML;
      var printpage=document.getElementById(el).innerHTML;
      document.body.innerHTML=printpage;
      window.print();
      document.body.innerHTML=restorepage;
     }
    
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
    <link rel="stylesheet" type="text/css" href="ticketpage.css">



  <title>Boss Airlines Ticket</title>
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
            <!-- Creating list and tdeir links  -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact us</a></li>
          </div>
    
    
          <div class="nav navbar-nav navbar-right">
            
          </div>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar ends -->
  <br><br><br><br>

  <div id="container2"><h3>Get Ticket  <i class="fa fa-ticket" style="font-size:36px"></i></h3></div>
  <hr>


  <form method="get" >
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
                <td class="info_td" id="td"><?php echo$_SESSION['choice'] ?></td>
                 <td class="info_td" id="td"><?php echo$_SESSION['source'] ?></td>
                 <td class="info_td" id="td"><?php echo$_SESSION['dest'] ?></td>
                 <td  class="info_td" id="td" ><?php echo$_SESSION['class'] ?></td>
              </tr>
            <br><br>
             <tr id="t_head">
               <td id="td">Ticket No.</td>
               <td id="td">Date</td>
               <td id="td">Arrival time</td>
               <td id="td">Departure time</td>
              </tr>
              <tr id="t_value">
                <td class="info_td" id="td"><?php echo$_SESSION['latestticketid'] ?></td>
                <td class="info_td" id="td"><?php echo$_SESSION['date'] ?></td>
               <td class="info_td" id="td"><?php echo$_SESSION['arrtime'] ?></td>
               <td  class="info_td" id="td"><?php echo$_SESSION['depttime'] ?></td>
              </tr>
            </table>

                 

       <br><br>

        

<?php 
if ($_SESSION['noofpass'] > 0 )
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
        echo $_SESSION['title1'];
        echo"&nbsp; ";
        echo $_SESSION['fn1'];
        echo"&nbsp; ";
        echo $_SESSION['ln1'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['age1'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['seatno1'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
      
      echo "<br>";

if ($_SESSION['noofpass'] > 1 )
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
        echo $_SESSION['title2'];
        echo"&nbsp; ";
        echo $_SESSION['fn2'];
        echo"&nbsp; ";
        echo $_SESSION['ln2'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['age2'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['seatno2'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}   
        echo "<br>";

      
 
if ($_SESSION['noofpass'] > 2 )
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
        echo $_SESSION['title3'];
        echo"&nbsp; ";
        echo $_SESSION['fn3'];
        echo"&nbsp; ";
        echo $_SESSION['ln3'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['age3'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['seatno3'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
        echo "<br>";

      
 
if ($_SESSION['noofpass'] > 3 )
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
        echo $_SESSION['title4'];
        echo"&nbsp; ";
        echo $_SESSION['fn4'];
        echo"&nbsp; ";
        echo $_SESSION['ln4'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['age4'];
        echo "</td>";
        echo "<td class='info_td' id='td'>";
        echo $_SESSION['seatno4'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
}     
    

?>

      
      <br><br>
      <div class="row" id="t_footer">
        <div class="col-md-2"></div>
        <div class="col-md-10">

        <span class="fa fa-barcode" style="font-size: 80px;"></span>
        <span id="t_value">&nbsp;&nbsp;&nbsp; HAVE A NICE TRIP</span>
      </div>
     </div>
       </div>  


    </div>
  </form>
  <br>
 
      <button onclick="printContent('container')"><span id="nb">Print Ticket</span></button>
     
     <button id="bbutton">  <a href="index.php" ><span id="nb">New Booking</span></a></button>
   
  <br>
  
 <?php
session_destroy();
 ?> 


  <br><br>
</div>



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