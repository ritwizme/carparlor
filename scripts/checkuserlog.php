<?php
session_start();
/*This php page must be included in the important pages to know what links 
*should be given to any user eg: Register/login or profile/logout/message icon
*This page will check if session variables needed for login user is set or not
*******************************************************************************/
/////Force error reporting for display/////
 error_reporting(E_ALL);
ini_set("display_errors", 0);
///////////////////////////////////////////////////////
include_once "DB_connect.php"; 
////declare $dyn_www so that no need to type all the tym the whole domain and since this page must be included to imp pages u can access all the tym//
$dyn_www = $_SERVER['HTTP_HOST']; //through this you can include www.mydomain_name in all of my scripts where this page was included
//////CHECK THE USER IF LOGIN OR NOT AND GIVE APPROPRIATE OUTPUT ////
$logOptions = ''; // Initialize the logOptions variable that gets printed to the page
// If the session variable and cookie variable are not set...
if (!isset($_SESSION['idx'])) { 
  /*if (!isset($_COOKIE['idCookie'])) {
     $logOptions = '<p><a href="register.php">Register</a>
	&nbsp;|&nbsp;
	 <a title="Login" href="#?w=500" class="poplight" rel="popup1">Login</a></p>';
   	  }*/
}
// If session ID is set for logged in user without cookies remember me feature set
if (isset($_SESSION['idx'])) { 
   	$decryptedID = base64_decode($_SESSION['idx']);
	$id_array = explode("7hmp3h9xfn8sq03hs2234", $decryptedID);
	$logOptions_id = $id_array[1];
    $logOptions_username = $_SESSION['username'];
    $logOptions_username = substr('' . $logOptions_username . '', 0, 15); // cut user name down in length if too long
	////////////////////////////////////////////////////////////////////////////////////
	
	
    $logOptions .='<a href="http://' . $dyn_www . '/admin/home.php">&nbsp;&nbsp;Dashboard</a>
	&nbsp;&nbsp; |&nbsp;&nbsp;
	<a href="http://' . $dyn_www . '/admin/logout.php">Log Out</a>';
$timestamp = time() + 600;
@mysql_query("UPDATE users SET timestamp = '$timestamp'  WHERE id='$logOptions_id'"); 
//////news div to be displayed if user is not login////
} else if (isset($_COOKIE['idCookie'])) {// If id cookie is set, but no session ID is set yet, we set it below and update stuff
	
	$decryptedID = base64_decode($_COOKIE['idCookie']);
	$id_array = explode("nm2c0c4y3dn3727553", $decryptedID);
	$userID = $id_array[1]; 
	$userPass = $_COOKIE['passCookie'];
	// Get their user first name to set into session var
    $sql_uname = mysql_query("SELECT username FROM users WHERE id='$userID' AND password='$userPass' LIMIT 1");
	$numRows = mysql_num_rows($sql_uname);
	if ($numRows == 0) {
		echo 'Something appears wrong with your stored log in credentials. <a href="login.php">Log in again here please</a>';
		exit();
	}
    while($row = mysql_fetch_array($sql_uname)){ 
	    $username = $row["username"];
	}

    $_SESSION['id'] = $userID; // now add the value we need to the session variable
	$_SESSION['idx'] = base64_encode("g4p3h9xfn8sq03hs2234$userID");
    $_SESSION['username'] = $username;
	

    $logOptions_id = $userID;
    $logOptions_uname = $username;
    $logOptions_uname = substr('' . $logOptions_uname . '', 0, 15); 
    ///////////          Update Last Login Date Field       /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$timestamp = time() + 600;
   @mysql_query("UPDATE users SET timestamp = '$timestamp'  WHERE id='$userID'"); 
  
	// Ready the output for this logged in user
     $logOptions = '<a href="http://' . $dyn_www . '/admin/home.php">&nbsp;&nbsp;Dashboard</a>
	&nbsp;&nbsp; |&nbsp;&nbsp;
	<a href="http://' . $dyn_www . '/admin/logout.php">Log Out</a>';
}

?>
