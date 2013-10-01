<?php
/**
* config.php
*
* 
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
$path = $_SERVER['SERVER_NAME'];
define ("BASEURL", 'http://'.$path.'/SimpleBlog/');

//require_once ('./models/authenticate.php');
/**
* This function update $data when change is made
* return $data
*/
function updateAllEntries() 
{
	global $data;
	$data = getAllEntries();
}

?>

