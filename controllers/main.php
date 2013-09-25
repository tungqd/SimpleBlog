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

require "./models/entry_model.php";
$data = "testing"; //global variable $data

$controllers_avaliable= array('main','login');

/**
* mainController reads data from entries folder then processes the data
*
*/
function mainController(){
	//global $data;
	//include("./models/entry.php");
	
	//addEntry(date("U"), "The first entry", "content of the first entry" . "\n". "the second line of the content");
	/*
	addEntry("1", "The first entry", "content of the  entry" . "\n". "the second line of the content");
	
	addEntry("2", "The second entry", "content of the second entry" . "\n". "the second line of the content");
	
	addEntry("12", "The third entry", "content of the third entry" . "\n". "the second line of the content");
	
	addEntry("14", "The fourth entry", "content of the fourth entry" . "\n". "the second line of the content");
	
	addEntry("17", "The fifth entry", "content of the fifth entry" . "\n". "the second line of the content");
	
	
	addComment("1", "1", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("1", "3", "Henry", "comment from Henry" . "\n" . "The second line of the comment");
	addComment("1", "7", "Larry", "comment from Larry" . "\n" . "The second line of the comment");
	addComment("2", "2", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("2", "5", "Mary", "comment from Mary" . "\n" . "The second line of the comment");
	addComment("2", "7", "David", "comment from David" . "\n" . "The second line of the comment");
	
	addComment("12", "1", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("12", "3", "Henry", "comment from Henry" . "\n" . "The second line of the comment");
	addComment("12", "7", "Larry", "comment from Larry" . "\n" . "The second line of the comment");
	addComment("14", "2", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("14", "5", "Mary", "comment from Mary" . "\n" . "The second line of the comment");
	
	addComment("17", "1", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("17", "3", "Henry", "comment from Henry" . "\n" . "The second line of the comment");
	addComment("17", "7", "Larry", "comment from Larry" . "\n" . "The second line of the comment");
	addComment("17", "2", "David", "comment from David" . "\n" . "The second line of the comment");
	addComment("17", "5", "Mary", "comment from Mary" . "\n" . "The second line of the comment");
	
	*/

	$result = getMostRecent();
	print_r($result);
	
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
