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

<!--   <script type="text/javascript">
  function fetchRestaurants(callback){
    fetch(`http://quotes.rest/qod.json?categories=tod`)
       .then(response => response.json())
       .then(json => callback(null, json.contents))
       .catch(error => callback(error, null))
}
fetchRestaurants((error, contents) => {
    if (error) 
        console.log(error)
    else {
        console.log(contents.quotes[0].quote)
        document.getElementById("demo").innerHTML=contents.quotes[0].quote;}

});
</script> -->
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
    echo '<a class="nav-link" href="index_gym.html">'.$_SESSION['name'].'</a>'; }
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
<p id="demo" class="quote" name="quote" style="font-weight:all; font-family:Verdana;color:white; text-shadow: 1px 1px 2px black"></p>
  <center><button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Quote for the day</button></center>
  <div id="demo" class="collapse">
    <div class="col-sm-12" style=" background-color: black;">
    
  <script type="text/javascript">
  function fetchRestaurants(callback){
    fetch(`http://quotes.rest/qod.json?categories=tod`)
       .then(response => response.json())
       .then(json => callback(null, json.contents))
       .catch(error => callback(error, null))
}
fetchRestaurants((error, contents) => {
    if (error) 
        console.log(error)
    else {
        console.log(contents.quotes[0].quote)
        document.getElementsByTagName("p")[0].innerHTML=contents.quotes[0].quote;} 
});
</script>
<!-- <p id="demo" class="quote" name="quote" style="font-weight:all; font-family:Verdana;color:pink;opacity: 0.7;"></p> -->
    </div>
  </div>
<div class="col-sm-2" style="background-color:white;  padding: 15PX; opacity:0.5;"><br><br><br><br><!-- <div class="col-sm-12" style="background-color:pink;" --><a href="user_profile.php" style="font-weight:all; font-family:Verdana;color:black;"><span class="rounded-sm" >User Profile  </span></a>
<!-- </div> -->
<br><br><br><br><br><br>
<a href="workout_suggestion.php" style="font-weight:all; font-family:Verdana;color:black;"><span class="rounded-sm" >Workout Suggestion </span></a>
<br><br><br><br><br><br><a href="user_profile.php" style="font-weight:all; font-family:Verdana;color:black;"><span class="rounded-sm" >Diet Consultancy  </span></a><br><br><br><br><br></div>

</body>
</html>
<!-- getElementsByTagName always return an array da boi! -->
