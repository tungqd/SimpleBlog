<h1>Main Page - <a href=index.php><?php echo SITENAME?></a></h1>
<div id="newestEntry">
	<div id="newestBlogEntry">
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
		<table>
		<?php
			for ($i = 2; $i < count($blog_entry); $i++) {
		?>
		<tr><td><?php echo $blog_entry[$i];?> </td>
	
    </div>
    <td>	
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
					<input type="hidden" name="ei" value="0">
					<input type="hidden" name="ci" value="<?php echo $i-2;?>">
    				<input type="submit" value="Delete">
				</form>
   			<?php
   				}	
   			?>    	
    	</div>
    </td>
    </tr> 
    	<?php	
		}   	
    ?>
    </table>
    </div>
    
    <div id="addComment">
    <!-- Add comment section -->
    <form name="add" action="index.php?c=main" id="addComm" method="POST">
    	<input type="hidden" name="ac" value="addComment">
    	<input type="hidden" name="view" value="loggedin">
        <input type="hidden" name="e" value="0">
		<input type="hidden" name="t" value="<?php echo time(); ?>">
        Name: <input type="text" name="name"/><br>
        Content: <br>
        <textarea rows="4" cols="50" name="comment"></textarea>
        <br>
    	<input type="submit" value="Add comment">
    </form> 
    </div>  
</div>	
<div class="right">
<table>
<!-- "Logout" button -->
<tr><td>
<div id="logoutButton">
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="notloggedin">
	<input type="hidden" name="ac" value="logout">
    <input type="submit" value="Logout">
</form>
</div></td></tr>

<!-- "Add new entry" button -->
<tr><td>
<div id="addEntryButton">
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="blog">
	<input type="hidden" name="view" value="blogview">
    <input type="submit" value="Add new entry">
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
    <table>
    	<tr><td>
    	<div id="entryList">
   		<form action="index.php" method="GET">  		
			<input type="hidden" name="c" value="blog">
			<input type="hidden" name="view" value="blogview">
			<input type="hidden" name="ac" value="displayEntry">
			<input type="hidden" name="e" value="<?php echo $i ?>">
    		<input type="submit" value="<?php echo $title ?>"> 		
    	</form>
    	</div></td>
	<?php if ($i !== count($data)-1) { ?>
		<td>
		<div id="deleteEntry">
		<form action="index.php" method="GET"> 
				<input type="hidden" name="c" value="main">
				<input type="hidden" name="view" value="notloggedin">
				<input type="hidden" name="ac" value="deleteEntry">
				<input type="hidden" name="e" value="<?php echo $i ?>">
    			<input type="submit" value="Delete">
    	</form>
    	</div></td></tr>
		
	<?php 
		} 
    	}
    ?>
</div></td></tr>
</div>

