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

/**
* This function update $data when change is made
* return $data
*/
function updateAllEntries() {
	global $data;
	$data = getAllEntries();
}


?>

