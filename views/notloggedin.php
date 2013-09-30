<div id="newest">

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
    	
    	echo $title;
    	echo "<br><br>";
    	echo $blog_content."<br>";
    	echo "Comments:"."<br>";
    	
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
       	
       		echo $comment_name;
    		echo "<br>";
    		echo $comment_content."<br>";
    	}
       		
    ?>
</div>
<div id="loginButton">
<!-- "Login" button-->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
	<input type="hidden" name="ac" value="login">
    <input type="submit" value="Login">
</form>
</div>
<!-- Entry list -->
<div id="list">
    <b>Entry list<br></b>
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
</div>


