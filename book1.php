<?php
require 'common.php';
if(!isset($_SESSION['email'])){
  header('login_register.php');
}
$get=$_SESSION['email'];

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="main.css" />
<style>
  
  .button{
     background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
  
  </style>
  
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
      <a href="login_register.php" id="login-register">Login/Register</a>
      <?php
    }
    ?>
    
    
    
    </div>
    </nav>
</header>
<div id="heading_container"><h1>Let's renovate your car...</h1></div>

<div id="boocking-area">

<div id="form_container">
	 <form action="bookcar.php" method="POST">
            
         <select name="city" id="city_in">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>


<select name="vehicle_make" id="brand_in">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>

<select name="model" id="model_in">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
            
            <?php
            if(isset($_SESSION['email'])){
               ?>
              <button class="button" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Pay 2500 INR</button>
            <?php
            }
            else{
              
            ?>
            
           
	
		<button class="button" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Book a wash</button>
		
	<?php
            }
  
  ?>
	

            


	



</form>

</div>

</div>
<div id="sub_menu">
<div id="s_logo">
	<a href="subscription.php" id="subscription"></a>
    <a href="subscription.php" id="offers"></a>
    <a href="subscription.php" id="support"></a>
    <a href="subscription.php" id="complaint"></a>
</div>
</div>

<div id="text_container">
<a href="#">.About Us</a>
<a href="#">.Careers</a>
<a href="#">.Help & support</a>
<a href="#">.Complaints</a>
<a href="#">.Terms & conditions</a>
<a href="#">.Privacy policy</a>
<a href="#">.Investors</a>
</div>

</div>


<footer>

	 <div id="socialLogo">
        	<div id="fb"><a href="#"></a></div>
            <div id="twitter"><a href="#"></a></div>
            <div id="insta"><a href="#"></a></div>
     </div>

<h3>Copyright Car Parlour @ 2017</h3>
</footer>

</body>
</html>
