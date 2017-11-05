<?php
require 'common.php';
$email =$_POST['email'];
$password=$_POST['password'];

$select_query = "SELECT id,email FROM users WHERE email='$email'AND password='$password'";
$result=mysqli_query($con,$select_query);
$row=mysqli_fetch_array($result);
$id=$row['id'];
$emails=$row['email'];

$_SESSION['id']=$id;
$_SESSION['email']=$emails;
echo $_SESSION['email'];
header('location:index.php');



?>