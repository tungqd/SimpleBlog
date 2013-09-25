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
	if (isset($_GET["a"]) && $_GET["a"] == "displayEntry") {
		$_SESSION["view"] = "blogview";
	} else {
		$_SESSION['view'] = 'addnew';	
	}
		
}
?>