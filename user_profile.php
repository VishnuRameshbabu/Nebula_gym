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
<form	method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
Age<input type="text" name="age" id="age"><br>
weight<input type="text" name="weight" id="weight"><br>
height<input type="text" name="height" id="height"><br>
health_diseases<input type="text" name="health_diseases" id="health_diseases"><br>
allergies<input type="text" name="allergies" id="allergies"><br>
<input type="submit" name="submit" value="submit" >
<p id='demo'></p>
</form>
<?php
$user_id=$_SESSION['eid'];
$dbc=mysqli_connect('localhost','Alien','123','gym')
or die("error da");
$query2="SELECT * from user_profile where user_id=$user_id";
$result2=mysqli_query($dbc,$query2);
$row2=mysqli_fetch_array($result2);
if($row2!=0){
// echo "<p>Seems like you last updated your details at <mark style= background-color:red; opacity:0.3;>".$row2['updated_at'] ."</mark></p>";
echo "<p>Here is your details from your last update</p>";
echo "<div class=col-lg-4 style=background-color:violet;opacity:1.0; color:pink;>";
echo "Age:".$row2['age']."<br>";
echo "Height:".$row2['height']."<br>";
echo "Weight:".$row2['weight']."<br>";
echo "Health_diseases:".$row2['health_diseases']."<br>";
echo "Allergies:".$row2['allergies']."<br>";
echo "</div>";
}
mysqli_close($dbc);
?>
<!-- <script type="text/javascript">
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

</body></html>

<?php
error_reporting(5);
$user_id=$_SESSION['eid'];
$dbc=mysqli_connect('localhost','Alien','123','gym')
or die("error da");
$query3="SELECT * from user_reg where user_id='$user_id'";
  $result3=mysqli_query($dbc,$query);
  $row3=mysqli_fetch_array($result);
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$health_diseases=$_POST['health_diseases'];
$allergies=$_POST['allergies'];
$height_meters=$height/100;
$bmi=$weight/($height_meters*$height_meters);
$Type_Id=0;
echo "Your BMI is ". $bmi;
if($bmi<=18.5){
echo '<div class="card bg-warning text-white">
    <div class="card-body">For your reference you are underweight!</div>
</div>';
$Type_Id=$Type_Id+4;
// if($row3['Type_Id']==0){
// $query4="INSERT INTO `user_profile` (`Type_Id`, `Week 1`, `Week 2`) VALUES (NULL, 'sada', 'erwad');"}
// else{
//   $query4="UPDATE `user_profile` SET Type_Id= 4 where user_id='$user_id'";
// }
echo "Its recommended that you should take up a weight gain program";
 
}
else if($bmi>18.5 and $bmi<24.9){
  echo '<div class="card bg-primary text-white">
    <div class="card-body">For your reference you are normal in terms of body weight</div>
</div>';
$Type_Id=$Type_Id+1;
  echo "<p>You can either take up a weight loss or a weight gain progam. Based on your choice</p>";
}
else if($bmi>25 and $bmi<29.9){
  echo '<div class="card bg-primary text-white">
    <div class="card-body">For your reference you are overweight</div>
</div>';
$Type_Id=$Type_Id+2;
	 echo "<p>Its recommended that you should take up a weight loss program</p>";

}
else if($bmi>30 and $bmi<39.9){
	echo '<div class="card bg-info text-white">
    <div class="card-body">You are obese!Please consider the prescribed diet in the user dashboard</div>
</div>';
$Type_Id=$Type_Id+3;
  echo "<p>Its recommended that you should take up a weight loss program</p>";
	# code...

}
else if($bmi>40){
 
  echo '<div class="card bg-danger text-white">
    <div class="card-body">You are in a serious condition! Consider consulting a doctor and come back with a health report such that a customized program will be given to you </div>
</div>';
$Type_Id=$Type_Id+999;
// echo $_SESSION['u_id'];
}
else{
  echo"<br>Seems like you didnt fill out the form huh?<br>";
}
// $decision=$_POST['decision'];

// if($decision=='insert'){
$query="SELECT * from user_reg where user_id='$user_id'";
  $result=mysqli_query($dbc,$query);
  $row=mysqli_fetch_array($result);
if($row==0){
$query="INSERT into user_profile VALUES('$user_id','$age','$weight','$height','$health_diseases','$allergies','$bmi',NOW())";

$result=mysqli_query($dbc,$query)
or die(mysqli_error($dbc));
}else{
$query=
"UPDATE `user_profile` SET age='$age',weight='$weight',height='$height',health_diseases='$health_diseases',allergies='$allergies',bmi=$bmi,updated_at=NOW(),Type_Id='$Type_Id' where user_id='$user_id'";

// "UPDATE into user_profile VALUES('$user_id','$age','$weight','$height','$health_diseases','$allergies','$bmi')";

$result=mysqli_query($dbc,$query)
or die(mysqli_error($dbc));
}
// $query2="SELECT * from user_profile where user_id=$user_id";
// $result2=mysqli_query($dbc,$query2);
// $row2=mysqli_fetch_array($result2);
// if($row2!=0){
// // echo "<p>Seems like you last updated your details at <mark style= background-color:red; opacity:0.3;>".$row2['updated_at'] ."</mark></p>";
// echo "<p>Here is your details from your last update</p>";
// echo "<div class=col-lg-4 style=background-color:violet;opacity:1.0; color:pink;>";
// echo "Age:".$row2['age']."<br>";
// echo "Height:".$row2['height']."<br>";
// echo "Weight:".$row2['weight']."<br>";
// echo "Health_diseases:".$row2['health_diseases']."<br>";
// echo "Allergies:".$row2['allergies']."<br>";
// echo "</div>";
// }
mysqli_close($dbc);

// }
?>
