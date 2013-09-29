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
	//Login form is submitted
	if ($_POST["ac"]=="log") {
     	if (verifyUser($_POST["userid"],$_POST["pw"])) {
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

