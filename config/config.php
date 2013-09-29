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

define ("BASEURL", "./");

//require_once ('./models/authenticate.php');
/**
* This function update $data when change is made
* return $data
*/
function updateAllEntries() {
	global $data;
	$data = getAllEntries();
}


?>

