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
	<title></title><meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title></title>
</head>

<body>
  <nav    class="navbar navbar-expand-sm bg-info navbar-dark">
   <ul   a class="navbar-nav">
    <li  a class="nav-item active">
          <?php
if($_SESSION['name']==True){
    echo '<a class="nav-link" href="index_gym.html">'.$_SESSION['name'].'</a>'; }
     else{
 echo'<a href="index_gym.html">Login</a>';
} ?> </li><li>

<?php
if($_SESSION['name']==True){
    echo '<a class="nav-link" href="?log=out">Logout</a>'; } ?>
      
    </li>
   <li class="nav-item active">
      <a class="nav-link" href="user_dashboard.php"> Home</a>
   
    </li>
    </ul>
</nav>
  <?php 
$user_id=$_SESSION['eid'];
$dbc=mysqli_connect('localhost','Alien','123','gym')
or die("error da");
$query2="SELECT * from user_profile where user_id=$user_id";
$result2=mysqli_query($dbc,$query2);
$row2=mysqli_fetch_array($result2);
$type_id=$row2['Type_Id'];

$dbc=mysqli_connect('localhost','Alien','123','gym')
or die("error da");
$query="SELECT * from workouts where Type_Id=$type_id";
$result=mysqli_query($dbc,$query);
while($row=mysqli_fetch_array($result)){
  echo '<br> <br><br> <br><br> <br><br> <br><div class="card bg-success text-white">
    <div class="card-body"> '.$row['Diet'].'</div>
</div>';
}
?>
</body>
</html>