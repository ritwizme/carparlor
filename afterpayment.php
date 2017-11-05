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
  
  #tick{
	      background: url(tick.png);
    width: 100px;
    height: 100px;
    background-size: cover;
    
    margin-left: auto;
    margin-right: auto;
    margin-top: 150px;
	  }
	#heading_container6{
		color:white;
    width: 100%;
    height: 100px;
   
    text-align: center;
	margin-top:85px;
	-webkit-box-flex:1;
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
    	<?php  if(isset($_SESSION['email'])){
            $yu = $_SESSION['name'];
         ?> <div id="name_c"><?php 
          echo 'Hi!  ';
          echo $yu;  ?></div>
         
        <?php
        
        }
        ?>
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
    	<form id="login_f" action="login_script.php" method="POST">
		Email: <input type="text" name="email"  value="" id="f_name_input"/>
   
		<br/><br />
        Password<input type="password" name="password"  value="" id="f_pass_input"/>
		<br/>
       
        <button type="submit">Log In</button>
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
    <form id="login_f3" action="sign.php" method="POST">
		Username: <input type="text" name="name"  placeholder="Full Name" id="user_n_input"/>
		<br/><br />
        Email Id: <input type="text" name="email"  placeholder="Email" id="user_e_input"/>
		<br/><br />
        
        Contact No: <input type="text" name="contact"  placeholder="Contact No" id="user_contact_input"/>
		<br/><br />
        City:<br /> <input type="text" name="city"  placeholder="Date of Birth" id="user_dob_input"/>
		<br/><br />
        Password <input type="password" name="password"  placeholder="Password" id="user_pass_input"/>
		<br/><br />
       <!-- Re Type Password <input type="password" name="Password"  value="enter name" id="user_pass2_input"/>-->
		<br/>
        <button type="submit">Submit</button>
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








<div id="tick"></div>
<div id="heading_container6"><h1>You have successfuly registered!</h1></div>

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
