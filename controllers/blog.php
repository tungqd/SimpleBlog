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
	include ('/models/entry_model.php');
	//pass entries to entry_model 
	$_SESSION['view'] = 'blogview';		
}
?>