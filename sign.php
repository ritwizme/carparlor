<?php
require 'common.php';
$name = $_POST['name'];
$email=$_POST['email'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$password=$_POST['password'];


$inserting = "INSERT into users(name,contact,city,email,password) values ('$name','$contact','$city','$email','$password')";
$submit = mysqli_query($con,$inserting);

echo '<script type="text/javascript">alert("Please sign in to book a wash")';


header('location:login_register.php');


?>