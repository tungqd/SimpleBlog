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
session_start();
$data = "testing"; //global variable $data
$controllers_avaliable= array('main','login');


function main_controller(){

	require "//models/entry.php" ;
	// Call function in models/entry.php to read data stored in the entries folder
	//get_entries();
	displayView("notloggedin");
	}
	
function login(){
	include("./controllers/login.php");
	login_controller();
	displayView($_SESSION['viewname']);
}

function blog(){
	include("./controllers/blog.php");
	blog_controller();
	displayView($_SESSION['viewname']);
}
?>
