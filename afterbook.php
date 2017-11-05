<?php
require 'common.php';



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link rel="stylesheet" href="main.css" />
<style>
#payment_option{
	width:100%;
	height:1000px;
	
	}
#form5{
	width:265px;
	height:400px;
	margin-left:auto;
	margin-right:auto;
	padding-top:200px;
	
	
	}
#payheading{
	       font-weight: bolder;
    font-size: 30px;
    color: white;
	}
#cod1{
	margin-top:40px;
	width:25px;
	height:25px;
	}
#cod2{
	margin-top:40px;
	width:25px;
	height:25px;
	margin-left:38px;
	}

#cod3{
	margin-top:40px;
	width:25px;
	height:25px;
	margin-left:105px;
	}

#w_book{
        position: absolute;
    margin-top: 35px;
    margin-left: 112px;
    border-radius: 7px;
    width: 125px;
    font-weight: 400;
    height: 50px;
    background: #0CC;
    color: #FFF;
    font-family: -webkit-pictograph;
	}
#button_in{    font-weight: bolder;
    font-size: 16px;
	    font-weight: bolder;
    font-size: 30px;
    color: white;
    font-family: monospace;
}

</style>
  
</head>

<body>
<div id="wrapper">
<header>
<div id="header_holder">
<div id="logo">
</div>
<div class="nav_holder" >

    <div id="login-container">
    
<div id="login_hold">
   <?php
    
    if(isset($_SESSION['email'])){
      ?>
      
      <a href="logout_script.php" id="login-register">Logout</a>
    <?php
    }
    
    else{
      ?>
      <a href="#" id="login-register" onclick="openPopupMenu()">Login</a>
      <?php
    }
    ?>
    </div>
    <div id="app_logo">
    <div id="app_icon">
    <span id="download">Get app:</span>
    </div>
      <div id="app_icon">
    <a href="#" id="android_logo"></a>
    </div>
      <div id="app_icon">
    <a href="#" id="ios_logo"></a>
      </div>
    	 <div id="name_c">Hi! Akshay</div>
    </div>

</div>
</div>

</div>
</header>

<div id="popup-bg">
	<div id="popup_main_div">
    	<p id="popup_heading">
        Login to your account
        </p>
    	<form id="login_f">
		Email: <input type="text" name="email"  value="" id="f_name_input"/>
		<br/><br />
        Password<input type="password" name="password"  value="" id="f_pass_input"/>
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
<div id="popup-bg3">
	<div id="popup_main_div3">
    <div id="close_popup_div" title="Close">
        <p onclick="closePopup3Menu()">
        X
        </p>
        </div>
        <div id="y_message">Your message</div>
        <form>
        <input type="text" name="username" placeholder="Name" id="c_name"/>
		<br/><br />
        <input type="text" name="email"  placeholder="Email Id" id="c_id"/>
		<br/><br />
        <input type="text" name="ph.no"  placeholder="Phone number" id="c_ph"/>
		<br/><br />
        
        	<textarea name"bio" rows="8" cols="40" id="c_message" placeholder="Your Message"></textarea>
            
            <a href="#" id="c_submit">Submit</a> 
        </form>
    	
    </div>
</div>
<script type="text/javascript">
	var popupDiv= document.getElementById("popup-bg");
	var popupDiv2=document.getElementById("popup-bg2");
	var popupDiv3=document.getElementById("popup-bg3");

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
	function openPopup3Menu(){
		popupDiv3.style.display="block";
		}
	function closePopup3Menu(){
		popupDiv3.style.display="none";
		}
		
</script>

<div id="payment_option">
<form id="form5">
	<div id="payheading">Payment options...</div>
    <hr />
	<div id="button_in">
	Cash on wash: <input type="checkbox" name="food" value="meet" id="cod1"><br /><br />
	Pay U money:<input type="checkbox" name="food" value="meet" id="cod2"><br /><br />
	Pay Tm :<input type="checkbox" name="food" value="meet" id="cod3"><br /><br />
   
   </form>
    <a href="#" id="w_book">Confirm</a></div>
</div>

<footer>

	 <div id="socialLogo">
        	<div id="fb"><a href="#"></a></div>
            <div id="twitter"><a href="#"></a></div>
            <div id="insta"><a href="#"></a></div>
     </div>
<div id="copyright">
Copyright Car Parlour @ 2017
</div>
</footer>
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
