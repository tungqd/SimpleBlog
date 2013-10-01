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
define ("BASEURL", 'http://localhost/CS174/HW2/');
define ("SITENAME", "Simple Blog");
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

