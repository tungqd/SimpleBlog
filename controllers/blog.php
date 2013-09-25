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

require "./models/entry_model.php";


function blogController(){
	//include ('./models/entry_model.php');
	if (isset($_GET["a"]) && $_GET["a"] == "displayEntry") {
		$_SESSION["view"] = "blogview";
	} else {
		$_SESSION['view'] = 'addnew';	
	}
		
}
?>