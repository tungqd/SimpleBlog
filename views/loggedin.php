
<div id="newestEntry">
	<div id="newestBlog">
	<table>
    <?php 	
    	$mostRecentEntry = $data[0];//Assign the latest entry in $data into $mostRecentEntry
    
    	/* Display entry itself */
    	
    		//Blog array has title and several lines of content
    		$blog = $mostRecentEntry[0]; 
    		$title = $blog[0];
    		$blog_content = "";	
    	
    		/* Add and append content to $blog_content through loop */
    		for ($i = 1; $i < count($blog); $i++)    	
			{		
				$blog_content .= $blog[$i] . "<br>";
    		}
    	
    ?> 
    <tr><th class="blogTitle"> <b> <?php echo $title;?> </b> </th></tr>
    <tr><td class="blogContent"> <?php echo $blog_content;?><td></tr>   	
    </table>
	</div>
	<div id="blogComment" >    	
	<b class="commentTitle"> Comments: </b><br>
	<?php
    	/* Display array of comments */
    	for ($i = 1; $i < count($mostRecentEntry); $i++)
    	{
    		$comment_array = $mostRecentEntry[$i];
    		$comment_name = $comment_array[0];
    		$comment_content = "";
    		
    		/* Add and append content line in EACH comment */
    		for ($j = 1; $j < count($comment_array); $j++)
    		{
    			$comment_content .= $comment_array[$j] . "<br>";
       		}	   
       	
       		echo $comment_name.":".$comment_content."<br>";
       	
    	}
       		
    ?>
    </div>
</div>

<div id="right">
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

