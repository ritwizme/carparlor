<?

session_start();
require 'common.php';
$p =$_SESSION['email'];
echo $p;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="main.css" />
</head>

<body>
<div id="wrapper">
<header>
	<a href="index.php" id="logo"></a>
    <nav>
    <a href="#" id="menu-icon"></a>
    <div id="login-container">
    <span id="download">Get app:</span>
    <a href="#" id="android_logo"></a>
    <a href="#" id="ios_logo"></a>
    
    <?php
    
    if(isset($_SESSION['email'])){
      ?>
      
      <a href="logout_script.php" id="login-register">Logout</a>
    <?php
    }
    
    else{
      ?>
      <a href="login_register.php" id="login-register">Logout</a>
      <?php
    }
    ?>
    </div>
    </nav>
</header>
<section id="form_c">
<section class="sub_container">
<div id="form1">
<h2>Monthly package</h2>
<div id="package_c">
'X' washes<br />
'Y' surface refinement<br />
'Z' a/c duct cleaning<br />
'A' Interior enrichment<br />

</div>
<?php
if(!isset($_SESSION['email'])){
    ?>
    <a href="login_register.php" id="book_b">book</a>
<?php
}
else {
    ?>
    <a href="book2.php" id="book_b">book</a>
<?php
}
?>



</div>
<div id="form2"><h2>Quaterly package</h2>
<div id="package_c">
'X' washes<br />
'Y' surface refinement<br />
'Z' a/c duct cleaning<br />
'A' Interior enrichment<br />
</div>
<a href="#" id="book_b">book</a>

</section>
<sectio class="sub_container2">

<div id="form3"><h2>Half Yearly package</h2>
<div id="package_c">
'X' washes<br />
'Y' surface refinement<br />
'Z' a/c duct cleaning<br />
'A' Interior enrichment<br />
</div>
<a href="#" id="book_b">book</a>

</div>
<div id="form4"><h2>Yearly package</h2>
<div id="package_c">
'X' washes<br />
'Y' surface refinement<br />
'Z' a/c duct cleaning<br />
'A' Interior enrichment<br />
</div>
<a href="#" id="book_b">book</a>

</div>


</section>

</div>

<footer>

	 <div id="socialLogo">
        	<div id="fb"><a href="#"></a></div>
            <div id="twitter"><a href="#"></a></div>
            <div id="insta"><a href="#"></a></div>
     </div>

<h3>Copyright Car Parlor @ 2017</h3>

</footer>

</body>
</html>
