<form 
    <input type="hidden" name="c" value="login.php">
    <input type="hidden" name="v" value="loginscreen.php">
    <input type="hidden" name="e" value="timestamp">
</form>


<form name="login">
    Username<input type="text" name="userid"/>
    Password<input type="text" name="pw"/>
    <form action="index.php" method="POST">
		<input type="hidden" name="c" value="login">
		<input type="hidden" name="view" value="loggedin">
    	<input type="submit" value="Login">
    	<input type="reset" value="Cancel">
    </form>
    
    
</form>




