<h1>Simple Blog - Login Screen</h1>


<?php /* handle invalid input*/
if ($_SESSION['logged'] == 'invalid') {
	echo "Invalid username/password. Please try again";
}
?>

<form name="login" action="index.php" method="GET">  
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="ac" value="log">
    Username: <input type="text" name="userid"><br>
    Password: <input type="password" name="pw"><br>
    <input type="submit" value="Login">
</form>


<form name="cancel" action="index.php" method="GET">
	<input type="hidden" name="c" value="main">
	<input type="hidden" name="view" value="notloggedin">
	<input type="submit" value="Cancel">
</form>




