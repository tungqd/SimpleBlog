<?php 
if (!isset($_SESSION["loggedIn"])) {
?>
<!-- "Login" button-->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
	<input type="hidden" name="ac" value="login">
    <input type="submit" value="Login">
</form>
<?php
} else { 
?>
<!-- "Logout" button -->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="notloggedin">
	<input type="hidden" name="ac" value="logout">
    <input type="submit" value="Logout">
</form>
<?php 
} 
?>
<div id="entryView">
	<div id="blogViewNewest">
    	<table>
   	 	<?php 	
    		$blog_entry = entry_drawer($data,$_GET["e"]);
    	?> 
    	<tr><th class="blogTitle"> <b> <?php echo $blog_entry[0];?> </b> </th></tr>
    	<tr><td class="blogContent"> <?php echo $blog_entry[1];?><td></tr>   	
    	</table>
	</div>
	<div id="blogComment" >    	
	<b class="commentTitle"> Comments: </b><br>
	<table>
	<?php
		for ($i = 2; $i < count($blog_entry); $i++) {
	?>
		<tr><td><?php echo $blog_entry[$i];?> </td>
	
    </div><td>
       	<div id="commentFormat">
       	<?php	
     		
    			//only display delete comment button if loggedin	
    			if (isset($_SESSION['loggedIn'])) {
    	?>
    			<!-- "Delete" comment button -->
    			
    			<form action="index.php" id="deleteComment" method="GET"> 
					<input type="hidden" name="c" value="main">
					<input type="hidden" name="view" value="loggedin">
					<input type="hidden" name="ac" value="deleteComment">
					<input type="hidden" name="ei" value="<?php echo $_GET["e"]; ?>">
					<input type="hidden" name="ci" value="<?php echo $i-2;?>">
    				<input type="submit" value="Delete">
				</form>
   		<?php
   				}	
   		?>    	
        </div></td></tr>
    	<?php	
		}   	
    ?>
    	</table>
	</div>
	
</div>


<div id="addComment">
    <!-- Add comment section -->
    <form name="add" action="index.php?c=main" id="addComm" method="POST">
    	<input type="hidden" name="ac" value="addComment">
        <input type="hidden" name="e" value="<?php echo $_GET["e"]; ?>">
		<input type="hidden" name="t" value="<?php echo time(); ?>">
        Name<input type="text" name="name"/><br>
        Content: <br>
        <textarea rows="4" cols="50" name="comment" form="addComm"></textarea>
    	<input type="submit" value="Submit comment">

    	</form>
    </form>    
</div>

