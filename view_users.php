<?php
 error_reporting(1);
session_start();
extract($_REQUEST);
if($_REQUEST['log']=='out')
{
session_destroy();  
header("location:Nebula_gym.php");
}?>
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
    span {
    display: inline-block;
    width: 100%;
    height: 100%;
    margin: 6px;
    background-color: pink;
  }
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>
<!-- document.getElementById("demo").innerHTML -->
</head>
<body style="background-image:url(gym_photos/login_page.jpg);  background-repeat: no-repeat;
   background-size: cover;">

	<nav    class="navbar navbar-expand-sm bg-info navbar-dark">
   <ul   a class="navbar-nav">
    <li  a class="nav-item active">
          <?php
if($_SESSION['name']==True){
    echo '<a class="nav-link" href="admin_dashboard.php">'.$_SESSION['name'].'</a>'; }
     else{
 echo'<a href="index_gym.html">Login</a>';
} ?> </li><li>

<?php
if($_SESSION['name']==True){
    echo '<a class="nav-link" href="?log=out">Logout</a>'; } ?>
      
    </li>
   <li class="nav-item active">
      <a class="nav-link" href="Nebula_gym.php"> Home</a>
    </li>
    
    </ul>
</nav>
<div class="container">
    <div class="col-lg-12 " style="color: white;font-family: Verdana; font-size:20px;" >Users</div><br><br>
    <?php

$dbc=mysqli_connect("localhost","Alien","123","gym"); 
$query="SELECT * from user_reg ";
$result=mysqli_query($dbc,$query);
?>
           
  <table class="table table-dark ">
    <thead>
      <tr>
        <th>user id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>email id</th>
      </tr>
    </thead>
   <?php 
while($row=mysqli_fetch_array($result)){
 echo' <tbody>
      <tr>
        <td>'.$row['user_id'] .'</td>
        <td>'.$row['first_name'] .'</td>
        <td>'.$row['last_name'] .'</td>
        <th>'.$row['email_id'].'</th>
      </tr> </tbody>';

}
?>
  </table>
</div>