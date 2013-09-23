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


/**
* mainController reads data from entries folder then processes the data
*
*/
function mainController(){
	//global $data;
	include("./models/entry.php");
	// Call function in models/entry.php to read data stored in the entries folder
	$filehandlers = getEntry();
	processEntry($filehandlers);	
	/*if("notloggedin"==$_GET['view']){
			$_SESSION['view'] = "notloggedin";
		}
	else if ("loggedin" == $_GET['view']){
			$_SESSION['view'] = "loggedin";
		}
	else {
			$_SESSION['view'] = "blog";
		}*/	
}

/**
*	processEntry processes filehandlers return from entry.php and renders to $data global
*
*/	
function processEntry($filehandlers) {
	global $data;
	$name ='';
	$content ='';
	$comment ='';
	
	//handle blog.txt
	$title = fgets($filehandlers[0]);
	while (!feof($filehandlers[0])) {
	
		$content .= fgets($filehandlers[0]).'<br>';
	}
	$data = array("title" => $title,"content" => $content);
	
	//handle comments
	for ($i = 1; $i < count($filehandlers); $i++) {
		$name = fgets($filehandlers[$i]);
		while (!feof($filehandlers[$i])) {
			$comment .= fgets($filehandlers[$i]).'<br>';
			}
		$data['name'.$i] = $name;
		$data['comment'.$i] = $comment;
		
		//reset name and comment for the next file
		$name = '';
		$comment = '';
	}
}
?>