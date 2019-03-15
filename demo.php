<!DOCTYPE html>
<html lang="en">
<head>
  <title>BOSS AIRLINES-Home</title>
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5pm2le-53NpfYU2m587NLw1v84D6wV3_kbJDFEszxdLUKkD7nSA"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>

   body
    {
      background-color: cornsilk;
      background: url(airline.png);
      background-size: cover;

    }
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      padding: 20px 20px 20px 200px;
      /*background: url(download.jpg);*/
    }
    
    .navbar-brand
    {
       background: url(logo.jpg);
       width: 195px;
       height: 85px;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  /*  .box{
  background: rgba(0.5,0.5,0.5,0.3);
  color:#000;
  width: 1100px;
  height:450px;
  top:200px ;
  right:150px; 
  position: absolute;
  /*transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}*/


 input[type=text], .one select{
    width: 40%;
    padding: 12px 20px;
    margin: 10px 90px;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=text], .two select{
    width: 40%;
    padding: 12px 20px;
    margin: 10px 90px;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

   input[type=text], .three select{
    width: 40%;
    padding: 12px 20px;
    margin: 10px 90px;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=text], .four select{
    width: 40%;
    padding: 12px 20px;
    margin: 10px 90px;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  #inline{
    display: block;

  }
  
  input[type=date] {
    width: 40%;
    padding: 12px 20px;
    margin: 10px 90px ;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  .five input[type="submit"]
{
  padding:10px;
  border: none;
  outline: none;
  height: 75px;
  width: 250px;
  position: absolute;
  top:600px;
  right: 170px;
  font-size: 25px;
  cursor: pointer;
  border-radius: 20px;
  color: black;
    background-color: skyblue;

}

.five input[type="submit"]:hover
{
  color: white;
    background-color: blue;
}

.page-footer a{
  color: skyblue;
}

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 1023px) {
      .sidenav {
        height: auto;
        padding: 50px;
      }
      .row.content {height:auto;} 
    }

    .nav a 
    {
      font-size: 20px;
    }
  </style>
</head>

<?php
?>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#"></a></li>
        <li class="active"><a href="demo.php">Home</a></li>
        <li><a href="#"></a></li>
          
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="#">Boss Airlines is the project designed to facilitate<br>airline ticket booking.</a></li>
           </ul>
         </li>
          
        <li><a href="#"></a></li>
        <li><a href="#">FAQ's</a></li>
        <li><a href="#"></a></li>
        
         <!-- drop down menu -->
       <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact us <span class="caret"></span></a>
           <ul class="dropdown-menu">
               <li><a href="#">Phone No: 2502514125</a></li>
                   
               <li><a href="#">Email: boss.air@gmail.com</a></li>
               
           </ul>
       </li>
      </ul>
     
    </div>
  </div>
</nav>
    

    
    <!--CAROUSEL-->
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

    
<BR>
<div class="container-fluid">
    
 <div class="row">
     <div class="col-sm-12" style="background-color: rgba(38,38,38, 0.3);color: black;font-family: Comic Sans MS;font-size: 30px;">&nbsp;&nbsp;&nbsp; <strong>FIND FLIGHTS</strong>    <span class="fa fa-plane" style="font-size:36px;"></span></div>
    </div>
  <div class="row">
<div class="col-sm-12">
<form name="demo_form" method="post" action="authenticate1.php">
 <div id="inline">
  <label style="margin-top: 50px; margin-left: 90px"><font style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:24px;">SOURCE</font></label>
  <div class="one">
  <select style="color: black; background-color: white" id="select1" name="source" required>
    <option value="" disabled selected>Select</option>
    <option value="MUMBAI">MUMBAI</option>
    <option value="CHENNAI">CHENNAI</option>
    <option value="DELHI">DELHI</option>
    <option value="KOLKATA">KOLKATA</option>
  </select>
  </div>
  
  <label style="margin-top: 30px; margin-left: 90px;"><font style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:24px;">DESTINATION</font></label>
  <div class="two">
  <select style="color: black; background-color: white" id="select2" name="dest" required>
    <option value="" disabled selected>Select</option>
    <option value="MUMBAI">MUMBAI</option>
    <option value="CHENNAI">CHENNAI</option>
    <option value="DELHI">DELHI</option>
    <option value="KOLKATA">KOLKATA</option>
  </select>
</div>
</div>
  <br>

  <label style="margin-top: 30px; margin-left: 90px;"><font style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:24px;">DATE OF JOURNEY</font></label>
   <?php
   $today = date("Y-m-d");
   echo "<input type='date' id='myDate' min=$today name='Jdate' value='1' required>";
   ?>
  
  <div class="three">
    <label style="margin-top: 30px; margin-left: 90px;"><font style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:24px;">NO. OF PASSENGERS</font></label>
  <select style="color: black; background-color: white;" name="noofpass" required>
    <option value="" disabled selected >0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
  </div>

  <label style="margin-top: 30px; margin-left: 90px;"><font style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:24px;">CLASS</font></label>
  <div class="four">
  <select style="color: black; background-color: white" name="class" required>
    <option value="" disabled selected >Class</option>
    <option value="Economy">Economy</option>
    <option value="Business">Business</option>
      </select>
  </div><br><br><br>
  
  <div class="five">
  <!--<input type="Submit" name="Continue" value="Continue" />-->
  <input type="Submit" name="b1" value="Continue" >
  <!-- <input type="Submit" name="b1" value="Continue" onclick="grid.html" > -->


</div>
</form>
</div>
</div>
</div>



<footer class="page-footer footerStyle">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-4 mt-md-0 mt-3">
        <br/><img src="logo.jpg"/>
        <h5 class="text-uppercase"><b></b></h5>
        <p> BOSS AIRLINES is the project developed by Shubham,Shreyas,Bhargavi and Omkar of CSE RAIT</p>
      </div>
      <hr class="clearfix w-100 d-md-none pb-6">
      <div class="col-md-4 mb-md-0 mb-3">
          <h5 class="text-uppercase"><b>Links</b></h5>
          <ul class="list-unstyled">
            <li>
              <a href="#"><span class="glyphicon glyphicon-home" style="font-size:18px;"></span> Home</a>
            </li>
            
            <li>
                <a href="#"><span class="glyphicon glyphicon-globe" style="font-size:18px;"></span> About</a>
            </li>
              <li>
              <a href="#"> <span class="fa fa-wrench" style="font-size:20px;"></span> FAQs</a>
            </li>
            <li>
              <a href="#"> <span class="fa fa-address-book" style="font-size:18px;"></span> Contact</a>
            </li>
            
          </ul>
        </div>
        <div class=" offset-md-3 col-md-4 mb-md-0 mb-3">
          <h5 class="text-uppercase"><b>CONNECT WITH US:</b></h5>
          <ul class="list-unstyled">
            <li>
              <a href="https://www.facebook.com/"><span class="fa fa-facebook-official" style="font-size:24px"></span></a>
            </li>
            <li>
              <a href="https://www.instagram.com/"><span class="fa fa-instagram" style="font-size:24px"></span></a>
            </li>
            <li>
              <a href="https://twitter.com/login?lang=en"><span  class="fa fa-twitter-square" style="font-size:24px"></span></a>
            </li>
             <li>
              <a href="https://www.youtube.com/"><span class="fa fa-youtube-play" style="font-size:24px"></span></a>
            </li>
             <li>
              <a href="https://in.linkedin.com/"><span class="fa fa-linkedin-square" style="font-size:24px"></span></a>
            </li>
          </ul>
        </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="#"> bossairlines.com</a>
  </div>
</footer>


<script>
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
