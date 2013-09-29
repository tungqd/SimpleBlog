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
$data;//global variable $data
include("./models/entry_model.php");
//$entrylist;
/**
* mainController reads data from entries folder then processes the data
*
*/
function mainController(){
	global $data;
	//global $entrylist;
	// Call function in models/entry_model.php to read data stored in the entries folder
	updateAllEntries();
	//processEntry($entry);		
	//$entrylist = getAllEntries();
	if (isset($_POST["ac"]) && $_POST["ac"] == "addComment") {
		//addAComment($_POST["e"], $_POST["name"], $_POST["comment"]);
		$_SESSION["view"] = "blogview";
	}
	else {
		$_SESSION["view"] = "notloggedin";
		}
}

function addAComment($ctimestamp, $name, $comment) {		
	global $time;
	$etimestamp = $time[count($timestamps)-1];
	addComment($etimestamp, $ctimestamp, $name, $comment);
}
?>
