<!DOCTYPE html>
<html>
<head>
	<title></title>

 <!--  <script>
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);
    document.getElementById("demo").innerHTML = myObj[2];
  }
};
xmlhttp.open("GET", "demo_file_array.php", true);
xmlhttp.send();
</script> -->
</head>

<body>
<form	method='post' action="<?php echo $_SERVER['PHP_SELF'];?>">
Age<input type="text" name="age" id="age"><br>
weight<input type="text" name="weight" id="weight"><br>
height<input type="text" name="height" id="height"><br>
health_diseases<input type="text" name="health_diseases" id="health_diseases"><br>
allergies<input type="text" name="allergies" id="allergies"><br>
<input type="submit" name="submit" value="submit" >
<input type="submit" name="edit">	
<p id='demo'></p>
</form>
<!-- <script type="text/javascript">

	var  obj;
	obj={ "success": { "total": 1 }, "contents": { "quotes": [ { "quote": "The tennis ball doesn't know how old I am. The ball doesn't know if I'm a man or a woman or if I come from a communist country or not. Sport has always broken down these barriers.", "length": "179", "author": "Martina Navratilova", "tags": [ "barriers", "inspire", "sports", "tod", "tod" ], "category": "inspire", "date": "2019-08-09", "permalink": "https://theysaidso.com/quote/martina-navratilova-the-tennis-ball-doesnt-know-how-old-i-am-the-ball-doesnt-kno", "title": "Inspiring Quote of the day", "background": "https://theysaidso.com/img/bgs/man_on_the_mountain.jpg", "id": "3ikYaFUvd5Gi2SIe3BacvweF" } ], "copyright": "2017-19 theysaidso.com" } };
	var obj2=JSON.stringify(obj);
	obj3=obj.contents.quotes[0].quote;
document.getElementById("demo").innerHTML = obj3;
</script> -->
<script type="text/javascript">
	function fetchRestaurants(callback){
    fetch(`http://quotes.rest/qod.json?categories=management`)
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
</script>
</body></html>

<?php 
?>
<?php
error_reporting(E_ALL ^ E_WARNING);
$user_id=1;
$age=$_POST['age'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$health_diseases=$_POST['health_diseases'];
$allergies=$_POST['allergies'];
$height_meters=$height/100;
$bmi=$weight/($height_meters*$height_meters);
echo "Your BMI is".$bmi;

if($bmi<=18.5){
	echo "<p> For your reference you are underweight!</p>";

}
else if($bmi>18.5 and $bmi<24.9){
	echo "<p>For your reference you are normal in terms of body weight";
}
else if($bmi>25 and $bmi<29.9){
	echo "<p>For your reference you are overweight";

}
else if($bmi>30 and $bmi<39.9){
	echo "<p>You are obese! please consider the following diet chart";
	# code...
}
else{
	echo "<p> You are in a serious condition! Consider consulting a doctor or else you will die </p>";
}
// $decision=$_POST['decision'];
$dbc=mysqli_connect('localhost','Alien','123','gym')
or die("error da");
// if($decision=='insert'){
$query="INSERT into user_profile VALUES('$user_id','$age','$weight','$height','$health_diseases','$allergies')";
$result=mysqli_query($dbc,$query)
or die(mysqli_error($dbc));
if(!$result){
echo "If there is not  any errors then you are good to go";}


// }
// else if ($decision=='edit'){
// 	$query="UPDATE table user_profile VALUES('$user_id','$age',$weight','$height','health_diseases','$allegies')";
// $result=mysqli_query($dbc,$query)
// or die("sorry some server error");
// echo "If there arent any errors then you are good to go";

// }
// else{

// }
?>