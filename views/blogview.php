<div id="newest" style="height:200px;width:700px;float:left;">
    
	<?php 	
    	
    	/* Display entry itself */
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
    	
    	/* Display array of comments */
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
    	}	
    ?>
    
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

<div id="comment" style="height:200px;width:700px;float:left;">
    <b>Comments</b>
</div>
