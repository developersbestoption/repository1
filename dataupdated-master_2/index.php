<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  #ft
  {
    background-color: light yellowgreen;
  }
</style>
<body>
    <nav class="nav navbar-inverse">
      <br>
   <div class="container ">
    <div class="navbar-header">
<a  class="navbar-brand"href="index.php">
    <p> <span class="glyphicon glyphicon-home"></span>&nbsp;HOME</p>    
</a>
    </div>
    <button class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav1">
<ul class="nav navbar-nav navbar-left"> 
    <li><a href="Registrationform1.php">registration page</a></li>
    <li><a href="singleprofile.php">single profile</a></li>
    <li><a class="active" href="rollnumber.php">roll number genarator</a></li>
    <li><a href="update.php">update student record</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
    <li><a href="login.php"> <p>logout<span class="glyphicon glyphicon-user"></span></p></a></li> 
</ul>
   </div>
    </nav>
    <div class="container">
        <h2>STUDENT INFORMATION</h2>  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="http://www.svrec.ac.in/imagess/slider/4_new.png" alt="svrec1" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="http://www.svrec.ac.in/imagess/slider/svrec_new.png" alt="svrec2" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://www.svrec.ac.in/imagess/slider/5_new.jpg" alt="svrec3" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://www.svrec.ac.in/imagess/slider/2_new.jpg" alt="svrec4" style="width:100%;">
            </div>
            <div class="item">
              <img src="http://www.svrec.ac.in/imagess/slider/new1.jpg" alt="svrec3" style="width:100%;">
            </div>
          </div>
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
</div>
</div>
<!-- footer -->
<br><br><hr class="">

<div id="ft" class="mkl_footer bg-primary ">
  <div class="sub-footer">
    <div class="container">
      <br>
      <div class="mkls_footer_grid ">
        <div class="col-xs-4 mkls_footer_grid_left">
          <h4><b>Location:</b></h4>
          <p>SVR Engineering College
            <br> Ayyaluru,Nandyal<br>AP
          </p>
        </div>
        <div class="col-xs-4 mkls_footer_grid_left">
          <h4><b>Mail Us:</b></h4>
          <p>
            <span>Phone : </span>91 99634 35255
          </p>
          <p>
            <span>Email : </span>
            <a href="mailto:principal@svrec.ac.in">principal@svrec.ac.in</a>
          </p>
        </div>
        <div class="col-xs-4 mkls_footer_grid_left">
          <h4><b>Opening Hours:</b></h4>
          <p>Working days : 8am-10pm</p>
          <p>Sunday
            <span>(closed)</span>
          </p>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="botttom-nav-allah">
        <ul>
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="../college-history.html">About Us</a>
          </li>
          <li>
            <a href="../programmes-offered.html">Courses</a>
          </li>

          <li>
            <a href="contact.html">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- footer-button-info -->
      <!--div class="footer-middle-thanks">
    <h2>Thanks For watching</h2>
  </div-->
      <!-- footer-button-info -->
    </div>
  </div>
  <div class="footer-copy-right">
    <div class="container">
      <div class="allah-copy">
        <p>© 2007. All rights reserved | Redesign by
          <a href="http:/www.svrec.ac.in/">svrecdevelopers</a>
        </p>
                </div>
      <div class="footercopy-social">
        <ul>
          <li>
            <a href="#">
              <span class="fa fa-facebook"></span>
            </a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UC7fczHCA-HT6BXdwJrU8M6A">
              <span class="fa fa-youtube-play"></span>
            </a>
          </li>

        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</body>
</html>
