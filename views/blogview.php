<div id="newest">
    
    <!-- Display entry itself -->
	<?php 	
    	$blog = $data[0];
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
    <form name="add">
        Name<input type="text" name="name"/><br>
        Comment<input type="text" name="comment"/>
        <form action="index.php" method="POST">
			<input type="hidden" name="c" value="main">
			<input type="hidden" name="a" value="main">
			<input type="hidden" name="view" value="blogview">
    		<input type="submit" value="Submit comment">
    	</form>
    </form>
    
</div>
