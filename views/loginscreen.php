<h1>Simple Blog - Login Screen</h1>

<form name="login" action="index.php" method="GET">   
	<input type="hidden" name="c" value="login">
    <table>	
    	<tr>
    		<td>Username</td>
    		<td><input type="text" name="userid"></td>
    	</tr>
    	<tr>
    		<td>Password</td>
    		<td><input type="text" name="pw"></td>
    	</tr>
    	<tr><td><input type="submit" value="Login"></td></tr>
   </table>
</form>
<form name="cancel" action="index.php" method="GET">
	<input type="hidden" name="c" value="main">
	<input type="hidden" name="view" value="notloggedin">
	<input type="submit" value="Cancel">
</form>




