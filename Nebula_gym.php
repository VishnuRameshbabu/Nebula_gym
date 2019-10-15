<?php
//session_start();

//if($_REQUEST['log']=='out')
//{
//session_destroy();
//header("location:Nebula_gym.php");
//}?>
<?php 
//error_reporting(1);?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

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
   <ul   a class="navbar-nav"><br>
    <li  a class="nav-item active"><a class="nav-link"  href=index_gym.html>Login</li><?php
     //if($_SESSION['name']==True){
    //echo '<a class="nav-link" href="admin_dashboard.php">'.$_SESSION['name'].'</a>'; }
     //else{
 //echo'<a href="index_gym.html">Login</a>';
//} ?> 
  <?php
//if($_SESSION['name']==True){
  //  echo '<a class="nav-link" href="?log=out">Logout</a>'; } ?>
      
    
   <li class="nav-item active">
      <a class="nav-link" href="register_gym.php">Register</a>
   
    </li>
    </ul>
</nav>
<br><br>
<div class="panel panel-default">
    <div class="panel-body"><img style="height: 0%; width: 100%; 	vertical-align: middle;" src="gym_photos/gym1.jpg"></div>
  </div>
<div class="container text-center">
	<p style="color: violet; font-size: 25px; font-weight: bold;">This the gym area</p>
<div class="row">
    <div class="col-sm-4">
      <img src="gym_photos/test1.jpeg" class="img-responsive" style="width:100%; height:100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;"></p>
    </div>
    <div class="col-sm-4"> 
      <img src="gym_photos/test2.jpg" class="img-responsive" style="width:100%; height: 100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;"></p>    
    </div>

<div class="col-sm-4"> 
      <img src="gym_photos/test3.jpg" class="img-responsive" style="width:100%; height: 100%;" alt="Image">
      <p style="color: violet; font-size: 25px; font-weight: bold;"></p>    
    </div>

</div>
</div><br><br><br><br><br><br>

<footer class="container-fluid text-center" style=" background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;">
	<p style="font-size: 30px; color: purple;font-weight: bolder;">For further queries contact vishy_ram@gmail.com</p>
</footer>
<!-- s -->  <!-- <div class="slideshow-container">


 --></body>
</html>