<div id="newestEntry">
	<div id="newestBlog">
	<table>
    <?php 	
    	$blog_entry = entry_drawer($data,0);
    ?> 
    <tr><th class="blogTitle"> <b> <?php echo $blog_entry[0];?> </b> </th></tr>
    <tr><td class="blogContent"> <?php echo $blog_entry[1];?><td></tr>   	
    </table>
	</div>
	<div id="blogComment" >    	
	<b class="commentTitle"> Comments: </b><br>
	<?php
		for ($i = 2; $i < count($blog_entry); $i++) {
			echo $blog_entry[$i]."<br>";
		}
    	
    ?>
    </div>
</div>

<div class="right">
<table>
<tr><td>
<!-- "Login" button-->
<div id="loginButton">
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
	<input type="hidden" name="ac" value="login">
    <input type="submit" value="Login">
</form>
</div></td></tr>

<!-- Entry list -->
<tr><td>
<div id="list">
    <b class="listTitle">Entry list</b><br>
    <?php 
    	for ($i=0; $i < count($data); $i++) {
    		$title = $data[$i][0][0];  
    ?>
    
    	<!-- Loop to display list of entries -->
    	<form action="index.php" method="GET">
			<input type="hidden" name="c" value="blog">
			<input type="hidden" name="view" value="blogview">
			<input type="hidden" name="ac" value="displayEntry">
			<input type="hidden" name="e" value="<?php echo $i ?>">
    		<input type="submit" value="<?php echo $title ?>">
		</form>
    <?php
    	}
    ?>
</div></td></tr>
</table>
</div>


