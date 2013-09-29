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


function loginController(){
	global $USER;
	include ('./models/authenticate.php');
	if ($_POST["ac"]=="log") { /// do after login form is submitted  
     	if (verifyUser($_POST["userid"],$_POST["pw"])) {
     	/// check if submitted username and password exist in $USERS array 
     		//update new $data with most recent entry
     		global $data;	
     		include ('./models/entry_model.php');	
			updateAllEntries();
          	$_SESSION["view"]=("loggedin");
     	} else { 
          	$_SESSION["view"]=("loginscreen");
     	}
    }
    else {

		$_SESSION["view"]=("loginscreen");
    }
	}


?>

