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

/*
session_start();

//controllers available for application
$controllers_available = array("main","login","blog");

//decide the controller to be run
if(isset($_GET['c']) && in_array($_GET['c'],$controllers_available)){
	$controller = $_GET['c'];
	}
	
else{
	$controller = "main";
}

//function pointer to call the controller
$controller();

function main(){
	include("./controllers/main.php");
	main_controller();
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
*/
//Require the main controller and run it to get the most recent entry


require("./controllers/main.php");
main_controller();

//displayView renders and displays specific view
function displayView($viewname){

//?>


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
<link rel="stylesheet" type="text/css" href="./css/styles.css" />
</head>
<body>

	<?php include("./views/{$viewname}.php"); ?>

</body>
</html>

<?php
}
?>