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
<?php
$gym_id=$_GET['id'];
$user_id=$_SESSION['userid'];
 ?>
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
<br><br><br><br><br><br>
<?php $dbc=mysqli_connect("localhost","Alien","123","gym");
$query="SELECT * from user_reg";
$sel=mysqli_query($dbc,$query);
$result=mysqli_fetch_array($sel) ?>
<div class="container">
<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>User-ID</th>
        <th>FirstName</th>
        <th>Last Name</th>
        <th>email address</th>
        <th>phone number</th>

        <th>address</th>
      </tr>
    </thead>
    <tbody>
     <?php
      echo' <tbody>
      <tr>
        <td>'.$result['user_id'] .'</td>
        <td>'.$result['first_name'].'&nbsp;</td><td>'. $result['last_name'] .'</td>
                    <td>'.$result['email_id'] .'</td>
                    <td>'.$result['phone_number'].'&nbsp;'.'&nbsp;'.$result['alternate_phone_number'] .'</td>
                          <td>'.$result['locality_address'] .'&nbsp;'. $result['state'] .'</td>

      </tr>';
     ?>
    </tbody>
  </table>
</div>