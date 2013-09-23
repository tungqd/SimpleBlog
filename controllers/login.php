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
	include ('./models/authenticate.php');
	//Pass post data to authenticate
	$_SESSION['view']=('loginscreen');
	
}
?>

