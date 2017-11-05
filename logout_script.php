<?php

session_start();
if(!isset($_SESSION['email'])){
    echo 'logout';
}

session_destroy();
header('location:index.php')
?>