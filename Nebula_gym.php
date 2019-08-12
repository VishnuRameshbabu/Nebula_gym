<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <script type="text/javascript">
		var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
	</script> -->
	<!-- <link rel="stylesheet" href="utopia_style.css" > -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title></title>
	<style>
  
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
</head>
<body style="background-image:url(gym_photos/login_page.jpg);  background-repeat: no-repeat;
   background-size: cover;">

	<nav    class="navbar navbar-expand-sm bg-info navbar-dark">
   <ul   a class="navbar-nav">
    <li  a class="nav-item active">
      <a class="nav-link" href="index_gym.html">Login</a>
    </li>
   <li class="nav-item active">
      <a class="nav-link" href="register_gym.html">Register</a>
   
    </li>
    </ul>
</nav>
<br><br>
<div class="panel panel-default">
    <div class="panel-body"><img style="height: 0%; width: 100%; 	vertical-align: middle;" src="gym_photos/women.jpg"></div>
  </div>
<div class="container text-center">
	<p style="color: violet; font-size: 25px; font-weight: bold;">This the gym area</p>
<div class="row">
    <div class="col-sm-4">
      <img src="gym_photos/test1.jpeg" class="img-responsive" style="width:100%; height:100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;">Current Project</p>
    </div>
    <div class="col-sm-4"> 
      <img src="gym_photos/test2.jpg" class="img-responsive" style="width:100%; height: 100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;">Project 2</p>    
    </div>

<div class="col-sm-4"> 
      <img src="gym_photos/test2.jpg" class="img-responsive" style="width:100%; height: 100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;">Project 2</p>    
    </div>

</div>
</div><br><br><br><br><br><br>
 <div class="row" style="background-color: white;">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <div class="row" style="background-color: white;">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-calendar-o red-icon"></span>
      <h4 style="color:#303030;">24/7</h4>
      <p>ALL the year around</p>
    </div>
  </div>
<!-- <div class="row		" style=" background-color: white; max-height: 100%; max-width: 100%;" ><div class="col-sm-4" style="background-color: red;">hey </div><div class="col-sm-4" style="background-color: blue;">hey </div><div class="col-sm-4" style="background-color: yellow;">hey </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div class="col-sm-4" style="background-color: red;">hey </div></div> -->
<footer class="container-fluid text-center" style=" background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;">
	<p style="font-size: 30px; color: purple;font-weight: bolder;">TEXT AREA</p>
</footer>
<!-- s -->  <!-- <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="gym_photos/men.jpg" style="width:100%;height:450px;">
</div>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="gym_photos/women.jpg" style="width:100%;height:450px;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="gym_photos/gym1.jpg" style="width:100%;height:450px;">
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
 -->
  
 <!--  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gym_photos/gym1.jpg" alt="Los Angeles" width="200" height="200">
      <div class="carousel-caption">
      	<h3>  World class facilites</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="gym_photos/men2.jpg" alt="Chicago" width="200" height="200">
    </div>
    <div class="carousel-item">
      <img src="gym_photos/women.jpg" alt="New York" width="200" height="200">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

<!-- <p class="text-info" align="center" style="font-size: 30px; font-family: Verdana;" >Umm.. Site is under construction now! Kindly check us out later :)</p>
 --></body>
</html>