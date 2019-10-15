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


<?php
if(isset($_POST['submit'])){
  if($_POST['confirm']=='Yes'){
    $gyms_id=$_POST['ids'];
 $dbc=mysqli_connect("localhost","Alien","123","gym"); 
 $query="DELETE from user_reg where user_id=$gyms_id";
    mysqli_query($dbc,$query);
    echo '<p  style="font-weight:all; font-family:Verdana;color:white; text-shadow: 1px 1px 2px black;> Removed successfully</p>';
  }
  else{ 
    echo '<p  style="font-weight:all; font-family:Verdana;color:white; text-shadow: 1px 1px 2px black>  failed </p>';
  }}?>

  <?php
echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">';
echo '<input type="radio" name="confirm" value="Yes"/>Yes</br />';
echo '<input type="radio" name="confirm" value="No" checked="checked"/>No<br />';
echo '<input type="submit" value="Submit" name="submit" /><br /> ';
echo '<input type=hidden name="ids" value="'.$gym_id.'" /><br />'; 
echo '</form>';

?>
</body>
</html>
