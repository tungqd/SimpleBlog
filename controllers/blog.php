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

function blogController(){
	global $data;
	include ('./models/entry_model.php');
	$data = getAnEntry(0);
	if (isset($_GET["e"]) && $_GET["e"] == "displayEntry") {
		$_SESSION["view"] = "blogview";
	} 
	if ($_POST["a"] == "addEntry"){
	
		$_SESSION['view'] = "loggedin";
		//addBlogPost($_POST["title"], $_POST["content"]);
	} else {
		$_SESSION['view'] = 'addnew';	
	}
		
}
function addBlogPost($title, $content) {
	$timestamp = date();
	addEntry($timestamp, $title, $contetnt);
}
?>