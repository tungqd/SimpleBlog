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

/**
* mainController reads data from entries folder then processes the data
*
*/
function mainController(){
	global $data;
	
	updateAllEntries();
	//Add a comment
	if (isset($_POST["ac"]) && $_POST["ac"] == "addComment") {
		addAComment($_POST["e"], $_POST["t"], $_POST["name"], $_POST["comment"]);
		updateAllEntries();
		$_SESSION["view"] = "blogview";
		$_GET["e"] = $_POST["e"];
	}
	else if (isset($_SESSION["loggedIn"])) {
		//Delete a comment
		if (isset($_GET["ac"]) && $_GET["ac"] == "deleteComment") {
			deleteAComment($_GET["ei"], $_GET["ci"]);
			updateAllEntries();
			$_SESSION["view"] = "blogview";
			$_GET["e"] = $_GET["ei"];
		}
		//Delete an entry
		else if (isset($_GET["ac"]) && $_GET["ac"] == "deleteEntry") {
			deleteAnEntry($_GET["e"]);
			updateAllEntries();
			$_SESSION["view"] = "loggedin";
		}
		else {
			$_SESSION["view"] = "loggedin";
		}
	}
	else {
		$_SESSION["view"] = "notloggedin";
		}
}
/** 
* This function adds a comment
*
*/
function addAComment($index, $timestamp, $name, $comment) {		
	addComment($index, $timestamp, $name, $comment);
}
/**
* This function delete a comment
*
*/
function deleteAComment($entryi, $commenti) {
	deleteComment($entryi, $commenti);
}
/**
* This function deletes an entry from the list
*
*/
function deleteAnEntry($i) {
	deleteEntry($i);
}
?>
