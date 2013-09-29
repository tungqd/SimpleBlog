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
	global $data;
	//global $entrylist;
	// Call function in models/entry_model.php to read data stored in the entries folder
	updateAllEntries();
	//processEntry($entry);		
	//$entrylist = getAllEntries();
	if (isset($_POST["ac"]) && $_POST["ac"] == "addComment") {
		addAComment($_POST["e"], $_POST["t"], $_POST["name"], $_POST["comment"]);
		updateAllEntries();
		$_SESSION["view"] = "blogview";
		$_GET["a"] = $_POST["e"];
	}
	else if (isset($_GET["ac"]) && $_GET["ac"] == "deleteComment") {
		deleteAComment($_GET["ei"], $_GET["ci"]);
		updateAllEntries();
		$_SESSION["view"] = "blogview";
		$_GET["a"] = $_GET["ei"];
	}
	else if (isset($_GET["e"]) && $_GET["e"] == "deleteEntry") {
		deleteAnEntry($_GET["a"]);
		updateAllEntries();
		$_SESSION["view"] = "loggedin";
	}
	else {
		$_SESSION["view"] = "notloggedin";
		}
}

function addAComment($index, $timestamp, $name, $comment) {		
	addComment($index, $timestamp, $name, $comment);
}

function deleteAComment($entryi, $commenti) {
	deleteComment($entryi, $commenti);
}
function deleteAnEntry($i) {
	deleteEntry($i);
}
?>
