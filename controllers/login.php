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
	global $data;	
    include ('./models/entry_model.php');	
	include ('./models/authenticate.php');
	//Login form is submitted
	if (isset($_POST["ac"]) && $_POST["ac"]=="log") {
     	if (verifyUser($_POST["userid"],$_POST["pw"])) {
     		setSessionVariable(); 		
			updateAllEntries();			
          	$_SESSION["view"]=("loggedin");
     	} else { 
          	$_SESSION["view"]=("loginscreen");
     	}
    }
    else if (isset($_GET["ac"]) && $_GET["ac"] == "login") {
    	$_SESSION["view"]=("loginscreen");
    }
    else if (isset($_GET["ac"]) && $_GET["ac"] == "logout") {
		destroySession();
		updateAllEntries();	
		$_SESSION["view"]=("notloggedin");		
    }
}


?>

