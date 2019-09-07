<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<?php
extract($_REQUEST);
if(isset($sub))
{
$id=$_REQUEST['mem_user_name'];
$pass=$_REQUEST['mem_user_pwd'];
$dbc=mysqli_connect("localhost","Alien","123","gym");
$sel=mysqli_query($dbc,"select * from user_reg where email_id='$id'")   ;
$arr=mysqli_fetch_array($sel);
if(($arr['email_id']==$id) and( $arr['password']==$pass))
  {
$user_id=$arr['user_id'];
$first_name=$arr['first_name'];
$emaili_id=$arr['email_id'];
$_SESSION['eid']=$arr['user_id'];
 $_SESSION['emailid']=$emaili_id;
 $_SESSION['name']=$first_name;
 echo "<script>location.href='user_dashboard.php'</script>";
   }
else
{
$er="id and password do not match :(";
echo $er;
}
}
?>
<body style="background-image:url(gym_photos/login_page.jpg);  background-repeat: no-repeat;
   background-size: cover;">


<div class="container-fluid">
  <p class="text-info" align="center" style="font-size: 45px;  font-family: cursive;;" >Gym login portal-Member</p>
  <form method="post" action=""><br><br><br><br><br><br>
    <p align="center" style="font-size: 20px; font-family: Verdana; color:blue" > Username:<input type="text" id="mem_user_name" name="mem_user_name" maxlength="40"></p>
    <p align="center" style="font-size: 20px; font-family: Verdana; color:blue;" >Password:<input type="text" id="mem_user_pwd" name="mem_user_pwd"></p>
    <center> <button id="sub" onclick="validate()" class="btn btn-primary btn-lg" name="sub" type="submit"> submit</button></center>
    <script type="text/javascript">
      function validate(){
        var x = document.getElementById("mem_user_name").value;
        var y = document.getElementById("mem__user_pwd").value;
        if(x=="" || y==""){
          alert("password and username should not be empty")
          return false;
        }
      }
    </script>

  </form>
</div>
</div>
    
</body>
</html>