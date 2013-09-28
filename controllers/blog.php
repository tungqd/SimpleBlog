<?php
/**
* blog.php
*
* This file is used for handling adding a blog post.
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
$time;
include ("./models/entry_model.php");

function blogController(){	
	global $time;
	$time[0] = 0;
	updateEntry();
	
	//display blog entry
	if (isset($_GET["e"]) && $_GET["e"] == "displayEntry") {
		$_SESSION["view"] = "blogview";
	} 
	//Entry is added
	else if (isset($_POST["ac"]) && $_POST["ac"] == "addEntry"){
		$time[] = $_POST["e"];
		addBlogPost($_POST["e"], $_POST["title"], $_POST["content"]);
		updateEntry();
		$_SESSION['view'] = "loggedin";
	} 
	//Add new entry
	else {
		$_SESSION['view'] = "addnew";	
	}
	
		
}
/**
* This function adds a blog entry
*
*/
function addBlogPost($timestamp, $title, $content) {
	addEntry($timestamp, $title, $content);
}

/**
* This function updates $data to the latest entry 
*
*/
function updateEntry() {
	global $data;
	$data = getMostRecentEntry();
}	
?>