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
$_SESSION['signedin']= false;

function loginController(){
	include ('./models/authenticate.php');
	
	$uid = $GET['userid'];
	$pw = $GET['pw'];
	if (true)
		$_SESSION['signedin'] = true;
		
	if ($_SESSION['signedin']) {
		$_SESSION['view']=('loggedin');
	}
	else {
		$_SESSION['view']=('loginscreen');
	}
	
}

?>

