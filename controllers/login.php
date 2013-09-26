<?php
/**
* login.php
*
* Controller for handling user login 
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/

//not signed in
$_SESSION["logged"]= ("guest");

function loginController(){
	global $USER;
	include ('./models/authenticate.php');
	if ($_POST["ac"]=="log") { /// do after login form is submitted  
     	if (isset($_POST["userid"]) && $USERS[$_POST["userid"]]==$_POST["pw"]) {
     	/// check if submitted username and password exist in $USERS array 
          	$_SESSION["logged"]=("loggedin");
          	$_SESSION["view"]=("loggedin");
     	} else { 
          	$_SESSION["logged"]= "invalid";
          	$_SESSION["view"]=("loginscreen");
     	}
    }
    else {

		$_SESSION["view"]=("loginscreen");
    }
	}


?>

