<div id="Entryview">
	<div id="blogViewNewest">
    
    	<!-- Display entry itself -->
		<?php 	
			$entry = $data[$_GET["a"]];
    		$blog = $entry[0];
    		$title = $blog[0];
    		$content = "";
    	
    		for ($i = 1; $i < count($blog); $i++)
    		{
    			$content .= $blog[$i] . "<br>";
    		}
    	
    		echo $title;
    		echo "<br><br>";
    		echo $content."<br>";
    	?> 
	</div>



	<div id="blogViewComment">
    	<b>Comments</b><br>
    
    	<!-- Display array of comments-->
   		<?php
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
       	
       			echo $comment_name;
    			echo "<br>";
    			echo $comment_content;
    	?>
    			<!-- "Delete" comment button -->
    			<form action="index.php" method="GET"> 
					<input type="hidden" name="c" value="main">
					<input type="hidden" name="view" value="loggedin">
					<input type="hidden" name="ac" value="deleteComment">
					<input type="hidden" name="ei" value="<?php echo $_GET["a"]; ?>">
					<input type="hidden" name="ci" value="<?php echo $i-1;?>">
    				<input type="submit" value="Delete">
				</form>
   		<?php
        	}
    	?>
	</div>
</div>


<div id="addComment">
    <!-- Add comment section -->
    <form name="add" action="index.php?c=main" method="POST">
        Name<input type="text" name="name"/><br>
        Content: <br>
        <textarea rows="4" cols="50" name="comment" form="addBlog"></textarea>
        	<input type="hidden" name="ac" value="addComment">
        	<input type="hidden" name="e" value="<?php echo $_GET["a"]; ?>">
			<input type="hidden" name="t" value="<?php echo time(); ?>">
    		<input type="submit" value="Submit comment">
    	</form>
    </form>    
</div>
