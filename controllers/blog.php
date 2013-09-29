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
include ("./models/entry_model.php");

function blogController(){	
	updateAllEntries();
	
	//display a blog entry
	if (isset($_GET["ac"]) && $_GET["ac"] == "displayEntry") {
		$_SESSION["view"] = "blogview";
	} 
	//Add an entry
	else if (isset($_POST["ac"]) && $_POST["ac"] == "addEntry"){
		addBlogPost($_POST["e"], $_POST["title"], $_POST["content"]);
		updateAllEntries();
		$_SESSION['view'] = "loggedin";
	} 
	//Add new entry screen
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
	
?>