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
$data; //global variable $data
$controllers_avaliable= array('main','login');


function main_controller(){
	
	include("./models/entry.php");
	// Call function in models/entry.php to read data stored in the entries folder
	$filehandlers = getEntry();
	$name = '';
	$comment = '';
	$count = 0;
	$title = fgets($filehandlers[0]);
	$content = fgets($filehandlers[0]);
	/*
	for ($i=1; $i < count($filehandlers); $i++) {
		$count = 0;
		while (!feof ($filehandle) {
			if ($count=0) { 
	}	*/
	$data = array('title' => $title, 'content' => $content);
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