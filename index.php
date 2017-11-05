<?php
include_once("scripts/checkuserlog.php");
?>
<?php
session_start();

$errorMsg = '';
$email = '';
$pass = '';
$remember = '';
$timestamp = time() + 300;
if (isset($_POST['email'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if (isset($_POST['remember'])) {
    $remember = $_POST['remember'];
  }
  $email = stripslashes($email);
  $pass = stripslashes($pass);
  $email = strip_tags($email);
  $pass = strip_tags($pass);
  
  if ((!$email) || (!$pass)) { 

    $errorMsg = 'Please fill in both fields';

  } else { 
    include 'scripts/DB_connect.php'; 
    $email = mysql_real_escape_string($email); 
   
    $pass = md5($pass); 
    
        $sql = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$pass'"); 
    $login_check = mysql_num_rows($sql);
        
    if($login_check > 0){ 
          while($row = mysql_fetch_array($sql))
          {
    
          $id = $row["id"];   
          $_SESSION['id'] = $id;
    
          $_SESSION['idx'] = base64_encode("g4p37hmp3h9xfn8sq03hs2234$id");
        
          $username = $row["username"];
          $_SESSION['username'] = $username;

          mysql_query("UPDATE users SET last_log=now(), online = '1', timestamp = '$timestamp' WHERE id='$id' LIMIT 1");
                } 
  
        
          if($remember == "yes")
          {
                    $encryptedID = base64_encode("ghdg94enm2c0c4y3dn3727553$id");
              setcookie("idCookie", $encryptedID, time()+60*60*24*100, "/"); 
              setcookie("passCookie", $pass, time()+60*60*24*100, "/"); 
            } 
          
          header("Location: index.php?$id"); 
          exit();
  
    } else { 
        $errorMsg = "Incorrect login data, please try again";
    }


    } 

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<title>Untitled Document</title>
<link rel="stylesheet" href="main.css" />
<style>
  
  #btn2{    background-color: aliceblue;
    border-radius: 7px;
    margin-left: 235px;
    margin-top: 50px;}

  #email{
    padding:5px;
    margin-left: 23px;
    border-radius: 7px;
  }
  #pass{
    padding: 5px;
    margin-left: 5px;
    border-radius: 7px;
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
    
    if(isset($_SESSION['idx'])){
      
      echo "<a href='logout.php' id='login-register'>Logout</a>";
    }
    
    else{
      echo "<a href='#' id='login-register' onclick='openPopupMenu()'>Login</a>";
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
    	<form id="login_f" action="index.php" method="POST">
		Email: <input type="text" name="email"  value="" id="email" placeholder="Email" />
   
		<br/><br />
        Password:<input type="password" name="pass"  value="" id="pass" placeholder="********" />
		<br/>
       
        <button type="submit" id="btn2">Log In</button>
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
        <button type="submit" onclick="closePopupMenu2()">Submit</button>
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
          <button style="padding-left: 10px;padding-right: 10px; padding-top: 5px; padding-bottom: 5px; float: right; margin-top: 10px; margin-right: 10px;">Submit</button>
             
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









<div id="heading_container"><h1>Let's renovate your car...</h1></div>
<div id="heading_container2">
<div id="clear-fix"></div>
<h6>Let's renovate your car...</h6></div>
<div id="boocking-area" >

<div id="form_container" >
	 <form action="bookcar.php" method="POST">
            
         <select name="city_in" id="city_in">
  <option value="">Select City</option>
  <option value="Chennai">Chennai</option>
  <option value="Bangalore">Banglore</option>

</select>


<select name="brand_in" id="brand_in">
  <option value="">Select Car</option>
  <option value="TATA" id="brand_in">TATA</option>
  <option value="car1">car1</option>
  <option value="car2">car2</option>
  <option value="car3">car3</option>
  <option value="car4">car4</option>
  <option value="mercedes" id="brand_in">Mercedes</option>
  <option value="car1">car1</option>
  <option value="car2">car2</option>
  <option value="car3">car3</option>
  <option value="car4">car4</option>
  <option value="audi" id="brand_in">Audi</option>
  <option value="car1">car1</option>
  <option value="car2">car2</option>
  <option value="car3">car3</option>
  <option value="car4">car4</option>
</select>

<input id="model_in" type="text" name="model_in" placeholder="REG NO"/>
 
    
    <input id="date_in" type="date" placeholder="date" value="" name="date_in" />            
         
	
		<?php 

    if(isset($_SESSION['idx'])){
		
    echo "<button class='button' name='submit' type='submit' id='contact-submit' data-submit='...Sending'>Book your service</button>";
	
  }else{
   echo "<a class='button'  onclick='openPopupMenu()'>Login</a>";
  } 

  ?>
	

            


	



</form>

</div>

</div>
<div id="sub_menu">
<div id="menu_hold">
<hr />
<ul class="topnav" id="myTopnav">
  <li><a href="#Subscription"><img class="icon2" src="calander.gif" style="width:105px; height:105px;"/><span class="icon">Subscription</span></a></li>
  <li><a href="#Offer"><img class="icon2" src="privacy.gif"  style="width:105px; height:105px;"/><span class="icon">Offer</span></a></li>
  <li><a href="#Complaint"><img class="icon2" src="terms.gif" style="width:105px; height:105px;"/><span class="icon">Complaint</span></a></li>
  <li><a href="#Support"><img class="icon2" src="complaints.gif"
   style="width:105px; height:105px;"/><span class="icon">Support</span></a></li>
  <li class="icon">
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
  </li>
</ul>
</div>
</div>

<div id="text_container">
<a href="#">.About Us</a>
<a href="#">.Careers</a>
<a href="#">.Help & support</a>
<a href="#" onclick="openPopup3Menu()">.Complaints</a>
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
