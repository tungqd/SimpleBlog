<div id="newest">
    
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

<div id="comment">
    <b>Comments</b><br>
    
    <!-- Display array of comments-->
    <?php
    	for ($i = 1; $i < count($data); $i++)
    	{
    		$comment = $data[$i];
    		$comment_name = $comment[0];
    		$comment_content = "";
    		for ($j = 1; $j < count($comment); $j++)
    		{
    			$comment_content .= $comment[$j] . "<br>";
       		}	   
       		echo $comment_name;
    		echo "<br>";
    		echo $comment_content;
    		echo "<br>";
    	}
    ?>
</div>
<div id="addComment">
    <!-- Add comment section -->
    <form name="add" action="index.php?c=main" method="POST">
        Name<input type="text" name="name"/><br>
        Comment<input type="text" name="comment"/>
        	<input type="hidden" name="ac" value="addComment">
			<input type="hidden" name="e" value="<?php echo time(); ?>">
    		<input type="submit" value="Submit comment">
    	</form>
    </form>
    
</div>
