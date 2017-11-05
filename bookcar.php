<?php
error_reporting(E_ALL);
ini_set("display_errors",0);
include("scripts/DB_connect.php");

 if(isset($_POST['city_in'])){
$city=$_POST['city_in'];
$vehicle=$_POST['brand_in'];
$model=$_POST['model_in'];
$date = $_POST['date_in'];


$sql_query = mysql_query("INSERT INTO booking(city, vehicle_make ,model, date_time) VALUES ('$city', '$vehicle', '$model', '$date')")or die(mysql_error());
echo '<h1>Your booking has been done successfully</h1>';

echo '<h2>Your booking details are:</h2>';

echo'City:'.$city.'<br/>';
echo'Vehicle:'.$vehicle.'<br/>';
echo'Model:'.$model.'<br/>';
echo'Date:'.$date.'<br/>';

}else{

	echo'<h1>Post some data</h1>';
}


?>