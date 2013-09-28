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
	global $time;
	global $data;
	//global $entrylist;
	// Call function in models/entry_model.php to read data stored in the entries folder
	//$data = getMostRecentEntry(); //update Most recent entry into $data
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

/**
*	processEntry processes filehandlers return from entry_model.php and renders to global $data 
*
*/	
function processEntry($entry) {
	global $data;
	//initialize  $title, $name, $content, $comment
	$title ='';
	$name ='';
	$content ='';
	$comment ='';
	
	addEntry("12", "The third entry", "content of the third entry" . "\n". "the second line of the content");
	
	addEntry("14", "The fourth entry", "content of the fourth entry" . "\n". "the second line of the content");
	
	addEntry("17", "The fifth entry", "content of the fifth entry" . "\n". "the second line of the content");
	
	/*
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

function updateAllEntries() {
	global $data;
	$data = getAllEntries();
}
function addAComment($ctimestamp, $name, $comment) {		
	global $time;
	$etimestamp = $time[count($timestamps)-1];
	addComment($etimestamp, $ctimestamp, $name, $comment);
}
?>
