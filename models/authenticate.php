<?php
/**
* authenticate.php
*
* Authenticate is a model for controller login.php
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/

/**
Checks if current user is logged in or not
*/
function isCurrentLoggedIn()
{
	return isset($_SESSION['loggedIn']);
}

/**
Verifies if username is "pat" and password id "secret"
*/
function verifyUser($uID, $pw)
{
	return $uID == "pat" && $pw == "secret";
}

/**
sets the session variable
*/
function setSessionVariable()
{
	$_SESSION['loggedIn'] = true;
}

/**
destroys the session variable
*/
function destroySession()
{
	if(isset($_SESSION['loggedIn']))
	{
  		unset($_SESSION['loggedIn']);
  	}
}

?>






