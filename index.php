<?php
/**
* index.php
*
* This file acts as entry point and calls appropriate controllers.
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
session_start();

require_once('./config/config.php');

// there are 3 controllers
$controllers_available= array('main','login','blog');

//deciding the controller to be run
if(isset($_GET['c']) && in_array($_GET['c'],$controllers_available)){
	if("main"==$_GET['c']){
		$controller = "main";
	}
	else{
		$controller = $_GET['c'];
	}
}
else{
	$controller = "main";
}

//function pointer to call the controller
$controller();

function main(){
	require_once("./controllers/main.php");
	mainController();
	displayView($_SESSION['view']);
}
function login(){
	require_once("./controllers/login.php");
	loginController();
	displayView($_SESSION['view']);
}

function blog(){
	require_once("./controllers/blog.php");
	blogController();
	displayView($_SESSION['view']);
}

//displayView renders and displays specific view
function displayView($viewname){
?>
<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<title>Simple Blog</title>
<meta name="Authors" content="Tung Dang, Loc Dang, Khanh Nguyen" />
<meta name="description" content="Simple blog using MVC pattern for HW2 CS174" />
<meta name="keywords" content="HW2, blog, MVC" />
<meta charset="utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW"/>
<link rel="stylesheet" type="text/css" href="<?php echo BASEURL;?>/css/styles.css" />
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>
	
	<?php 
		global $data;
		require_once("./views/{$viewname}.php"); 
	?>

</body>
</html>
<?php
}
/*
* This function render entry at index $i from $list_items and returns an array
*
*/
function entry_drawer($list_items, $i) {
	$entry = $list_items[$i];//Assign the latest entry into $mostRecentEntry       	
    //Blog array has title and several lines of content
    $blog = $entry[0]; 
    $title = $blog[0];
    $blog_content = "";	
    	
    /* Add and append content to $blog_content through loop */
    for ($i = 1; $i < count($blog); $i++)    	
	{		
		$blog_content .= $blog[$i] . "<br>";
    }
    $blog_entry = array($title, $blog_content);
    
    /* Array of comments */
    for ($i = 1; $i < count($entry); $i++)
    {
    	$comment_array = $entry[$i];
    	$comment_name = $comment_array[0];
    	$comment_content = "";
    		
    	/* Add and append content line in EACH comment */
    	for ($j = 1; $j < count($comment_array); $j++)
    	{
    		$comment_content .= $comment_array[$j] . "<br>";
       	}	   
       	$comments = $comment_name .": ".$comment_content;
       	$blog_entry[] = ($comments);
    }
    return $blog_entry; 
}
?>