<?php
require 'common.php';



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="main.css" />
<style>
  
  .error {color: #FF0000;}
  
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
      <a href="#" id="login-register" onclick="openPopupMenu()">Login/ Register</a>
      <?php
    }
    ?>
    
    
    
    </div>
    </nav>
</header>

<div id="popup-bg">
	<div id="popup_main_div">
    	<p id="popup_heading">
        Login to your account
        </p>
    	<form id="login_f">
		Username: <input type="text" name="username"  value="enter name" id="f_name_input"/>
		<br/><br />
        Password <input type="password" name="Password"  value="enter name" id="f_pass_input"/>
		<br/>
        
       </form>
       
       
        <a id="#">Login</a>
    	<div id="close_popup_div" title="Close">
        <div id="f_reg">
        <p id="f_reg_h">
        Not a member yet?
        </p>
        <div id="f_p_container">
        <p id="f_text">
        Join our family
        </p>
        </div>
        <a id="f_reg_button" onclick="openPopup2Menu()">Register</a>
        </div>
               
        <p onclick="closePopupMenu()">
        X
        </p>
        </div>
    
    </div>
</div>
<div id="popup-bg2">
	<div id="popup_main_div2">
    	<div id="close_popup_div" title="Close">
        <p onclick="closePopupMenu2()">
        X
        </p>
        </div>
        <p id="popup_heading2">
        Sign Up
        </p>
    <form id="login_f3">
		Username: <input type="text" name="username"  value="enter name" id="user_n_input"/>
		<br/><br />
        Email Id: <input type="text" name="username"  value="enter name" id="user_e_input"/>
		<br/><br />
        
        Contact No: <input type="text" name="username"  value="enter name" id="user_contact_input"/>
		<br/><br />
        Date of Birth:<br /> <input type="text" name="username"  value="enter name" id="user_dob_input"/>
		<br/><br />
        Password <input type="password" name="Password"  value="enter name" id="user_pass_input"/>
		<br/><br />
        Re Type Password <input type="password" name="Password"  value="enter name" id="user_pass2_input"/>
		<br/>
        
       </form>
       <a href="#" id="Sign_Up">Sign Up</a>
       
    </div>
</div>
<script type="text/javascript">
	var popupDiv= document.getElementById("popup-bg");
	var popupDiv2=document.getElementById("popup-bg2");

	function openPopupMenu(){
		popupDiv.style.display = "block";
		}
	function openPopup2Menu(){
		popupDiv2.style.display="block";
		}
	function closePopupMenu(){
		popupDiv.style.display="none";
		}
	function closePopupMenu2(){
		popupDiv2.style.display="none";
		}
</script>

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
   <option value="volvo">Select Car</option>
  <option value="saab" id="brand">TATA</option>
  <option value="saab">car1</option>
  <option value="saab">car2</option>
  <option value="saab">car3</option>
  <option value="saab">car4</option>
  <option value="mercedes"id="brand">Mercedes</option>
  <option value="saab">car1</option>
  <option value="saab">car2</option>
  <option value="saab">car3</option>
  <option value="saab">car4</option>
  <option value="audi"id="brand">Audi</option>
  <option value="saab">car1</option>
  <option value="saab">car2</option>
  <option value="saab">car3</option>
  <option value="saab">car4</option>
</select>

<select name="model" id="model_in">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
            
            
	
		<button class="button" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Book a wash</button>
		
	
	

            


	



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
<a href="terms&cond.html">.Terms & conditions</a>
<a href="privacy.html">.Privacy policy</a>
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
