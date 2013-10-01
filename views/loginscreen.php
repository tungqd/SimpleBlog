<h1 class="LoginHeader">Main Page - <a href=index.php><?php echo SITENAME?></a></h1>
<?php /* handle invalid input*/
if (isset($_SESSION["Usage"]) && $_SESSION["Usage"] == "error") {
	echo "Invalid username/password. Please try again";
}
?>

<div class="wrapper">

	<div id="LoginArea">

		<!-- "Login" button-->
		<form name="login" action="index.php?c=login" method="POST">  
			<input type="hidden" name="ac" value="log">
    		Username: <input type="text" name="userid"><br>
    		Password: <input type="password" name="pw"><br>
    		<input type="submit" value="Login">
		</form> 

	</div> 

	<div id="CancelButton">
	
		<!-- "Cancel" button: bring user back to homepage -->
		<form name="cancel" action="index.php" method="GET">
			<input type="hidden" name="c" value="main">
			<input type="hidden" name="view" value="notloggedin">
			<input type="submit" value="Cancel">
		</form>
	</div> 

</div>
