<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  <script type="text/javascript">

        var first_name = document.getElementById("first_name").value;
        var last_name = document.getElementById("last_name").value;
        var password1 = document.getElementById("password1").value;
        var password2 = document.getElementById("password2").value;
        var gender = document.getElementsById('gender').value;
        var date_of_birth =document.getElementById('date_of_birth').value;
        var phone_no = document.getElementById('phone_no').value;
        var email_id = document.getElementById('email_id').value;
        var city =document.getElementById('city').value;
        var state = document.getElementById('state').value;
      function validate(){

        if(first_name == ""||last_name == ""||password1 == ""||password2 == ""||date_of_birth == ""||phone_no == ""||email_id == ""||city == ""|| state=="" ){
          alert("password and username should not be empty");
          return false;
        }
        if(password1==password2){
          alert("success");
        }
        
      }
    </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-image:url(gym_photos/login_page.jpg);  background-repeat: no-repeat;
   background-size: cover;">
<?php
$dbc=mysqli_connect("localhost","Alien","123","gym")
or die("some error");
if(isset($_POST['submit'])){
$password=mysqli_real_escape_string($dbc,trim($_POST['password1']));
$password_re=mysqli_real_escape_string($dbc,trim($_POST['password2']));
$first_name=mysqli_real_escape_string($dbc,trim($_POST['first_name']));
$last_name=mysqli_real_escape_string($dbc,trim($_POST['last_name']));
$city=mysqli_real_escape_string($dbc,trim($_POST['city']));
  $row=mysqli_fetch_array($result);
  if($row==0){
    $query="INSERT into user_reg(first_name,last_name,password,gender,date_of_birth,phone_number,email_id,address,city,state) VALUES('$first_name','$last_name','$password','$gender', '$date_of_birth','$phone_no','$email_id','$locality_address','$city','$state')";
 $result=mysqli_query($dbc,$query)
 or die("<p style=\"color:white;\">".mysqli_error($dbc)."</p>");
    echo "<p style=\"color:white;\"> Your account has been successfully created!</p>";   
    mysqli_close($dbc);
  exit();
  }
  else{
    echo "<p style=\"color:white;\"> email id already exists please choose another one :( </p>";
  
  $username="";}
} 

mysqli_close($dbc);
?>

<nav    class="navbar navbar-expand-sm bg-info navbar-dark">
   <ul   a class="navbar-nav">
    <li  a class="nav-item active">
      <a class="nav-link" href="index_gym.html">Login</a>
    </li>
    <li  a class="nav-item active">
      <a class="nav-link" href="Nebula's_gym.html">Home</a>
    </li>
  
  </ul>
</nav>
    

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="return validate()">
	<div class="container-fluid">

	<p class="text-info" align="center" style="font-size: 45px; font-family: 'Montserrat', sans-serif;" >User Registration</p>
    <br>
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >first_name:<input type="text" name="first_name"id="first_name" size="30" maxlength="60" /><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >last_name:<input type="text" name="last_name" id="last_name"size="30" maxlength="60" ><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >Password:<input type="Password" name="password1" id="password1"  /><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >Retype Password<input type="Password" name="password2" id="password2" /><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >Gender:<select id="gender" name="gender"  >
	<option value="M" >Male</option>
	<option value="F">Female</option>
</select><br />
	<p  class="text-info" align="center" style="font-size: 18px;  font-family: Verdana;" >Date_of_Birth:<input type="Date" name="date_of_birth" id="date_of_birth"/><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >Phone_Number:<input type="text" name="phone_no"id="phone_no" size="30" maxlength="10" /><br />

	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >email_id:<input type="text" name="email_id" id="email_id" size="30" maxlength="100"/><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >locality_address:<input type="text" name="locality_address" id="locality_address" size="30" maxlength="100"/><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >city:<input type="text" name="city" id="city" size="30"/><br />
	<p class="text-info" align="center" style="font-size: 18px; font-family: Verdana;" >State:<input type="text" name="state" id="state" size="30"/><br />
<input class="btn btn-primary btn-lg" type="submit" value="Sign up" name="submit">	
</div>

</form>
</body>
</html>
