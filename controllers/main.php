<?php
/**
* main.php
*
* This file accesses the data in the most recent blog entry and is used for adding 
* a comment.
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
$data; //global variable $data


function main_controller(){
	
	include("./models/entry.php");
	// Call function in models/entry.php to read data stored in the entries folder
	//get_entries();
	displayView("notloggedin");
	}
	

?>