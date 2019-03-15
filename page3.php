<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>BOSS AIRLINES-Passenger Details</title>
  <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5pm2le-53NpfYU2m587NLw1v84D6wV3_kbJDFEszxdLUKkD7nSA"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      
      footer {
      background-color: #555;
      color: white;
      padding: 15px;
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
      

  
      #passheading{
          background-color: rgba(38,38,38, 0.3);
          color: black;
          font-family: Comic Sans MS;
          font-size: 30px;
      }
      
      #blank{
          height: 30px;
      }
      
      input[type="submit"]{
    color: black;
    background-color: skyblue;
    margin-left:1100px;
    padding:10px ;
    border: none;
  outline: none;
  width: 130px;
  height: 60px;
  font-size: 25px;
  cursor: pointer;
  border-radius: 20px;
   }
   input[type="submit"]:hover{
    color: white;
    background-color: blue;
   }
      
    </style>
</head>
    
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
               <li><a href="#"></a></li>
           </ul>
       </li>
      </ul>
     
    </div>
  </div>
</nav>
    
  <div class="container-fluid">
     <form name="pass_details_form" method="post" action="authenticate3.php">
          <div class="row" id="passheading">
          <div class="col-sm-12">ENTER PASSENGER DETAILS   <span class="glyphicon glyphicon-pencil"></span></div>
      </div>
      
    <?php 
    if ($_SESSION['noofpass'] > 0 )
    {
    echo " 
      
       <div class='row' id='blank'>
          <div class='col-sm-12'></div>
      </div>
      
       <div class='row' style='background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-12'>PASSENGER 1</div>
      </div>
      
     
      <div class='row' style='font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-2' style='width:80px'>
          <select name='title1' required>
              <option value='Mr.'>Mr.</option>
              <option value='Ms.'>Ms.</option>
              <option value='Mrs.'>Mrs.</option>
              </select>
             </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='first name' name='fn1' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='last name' name='ln1' required>
          </div>
          <div class='col-sm-1' style=' width:1px;'>
          </div>  
           <div class='col-sm-1'>
              <input type='number' placeholder='age' name='age1' required>
          </div> 
          
             
      </div> " ; } ?>
    
    <?php 
    if ($_SESSION['noofpass'] > 1 ){ 
      echo "
      <div class='row' style='height:10px;'>
          <div class='col-sm-12'></div>
      </div>
      
      <div class='row' style='background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-12'>PASSENGER 2</div>
      </div>
      <div class='row' style='font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-2' style='width:80px;'>
          <select name='title2' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
              </select>
             </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='first name' name='fn2' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='last name' name='ln2' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
           <div class='col-sm-1'>
              <input type='number' placeholder='age' name='age2' required>
          </div>     
      </div> "; } ?>

     <?php 
    if ($_SESSION['noofpass'] > 2 ){ 
      echo "
      <div class='row' style='height:10px;'>
          <div class='col-sm-12'></div>
      </div>
      
      <div class='row' style='background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-12'>PASSENGER 3</div>
      </div>
      <div class='row' style='font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-2' style='width:80px;'>
          <select name='title3' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
              </select>
             </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='first name' name='fn3' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='last name' name='ln3' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
           <div class='col-sm-1'>
              <input type='number' placeholder='age' name='age3' required>
          </div>     
      </div> "; } ?>

      <?php 
    if ($_SESSION['noofpass'] > 3 ){ 
      echo "
      <div class='row' style='height:10px;'>
          <div class='col-sm-12'></div>
      </div>
      
      <div class='row' style='background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-12'>PASSENGER 4</div>
      </div>
      <div class='row' style='font-family: Comic Sans MS;font-size:20px;'>
          <div class='col-sm-2' style='width:80px;'>
          <select name='title4' required>
              <option>Mr.</option>
              <option>Ms.</option>
              <option>Mrs.</option>
              </select>
             </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='first name' name='fn4' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
          <div class='col-sm-3'>
              <input type='text' placeholder='last name' name='ln4' required>
          </div>
           <div class='col-sm-1' style='width:1px;'>
          </div>
           <div class='col-sm-1'>
              <input type='number' placeholder='age' name='age4' required>
          </div>     
      </div> "; } ?> 
      
    
      <div class="row" style="height:10px;">
          <div class="col-sm-12"></div>
      </div>
      
        <div class="row" style="height:10px;">
          <div class="col-sm-12"></div>
      </div>
      <br>
      
      <div class="row" id="passheading">
          <div class="col-sm-12">ENTER CONTACT DETAILS  <span class="fa fa-address-card-o" style="font-size:36px;"></span></div>
      </div>
      <br>
      
      <div class="row" style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;">
          <div class="col-sm-4">MOBILE NUMBER:</div>
          <div class="col-sm-2" style="width:1px"></div>
         <div class="col-sm-6"><input type="mobile" pattern="[1-9]{1}[0-9]{9}" required></div>
    </div>
      
      <br>
      <div class="row" style="background-color: rgba(48,58,38, 0.1);font-family: Comic Sans MS;font-size:20px;">
          <div class="col-sm-4">EMAIL ID:</div>
          <div class="col-sm-2" style="width:1px"></div>
         <div class="col-sm-6"><input type="email" pattern="([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})" required></div>
    </div>
      
    <br><br><br><br>

    <!--<input type="submit" value="NEXT" ></input> -->
    <input type="Submit" name="b1" value="Proceed" />
    <!-- <input type="submit" value="NEXT" onclick="location.href='pg4.html'"></input> -->

  </form>
  </div>

      
    <br><br><br>
    
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

    </body>

</html>