<div id="newest">

    <?php 	
    	/* Display entry itself */
    	$mostRecentEntry = $data[0]; 
    	$blog = $mostRecentEntry[0];
    	$title = $blog[0];
    	$blog_content = "";	
    	
    	for ($i = 1; $i < count($blog); $i++)    	
		{		
			$blog_content .= $blog[$i] . "<br>";
    	}
    	
    	echo $title;
    	echo "<br><br>";
    	echo $blog_content."<br>";
    	
    	/* Display array of comments */
    	for ($i = 1; $i < count($mostRecentEntry); $i++)
    	{
    		$comment_array = $mostRecentEntry[$i];
    		$comment_name = $comment_array[0];
    		$comment_content = "";
    		
    		/* Display content of comments */
    		for ($j = 1; $j < count($comment_array); $j++)
    		{
    			$comment_content .= $comment_array[$j] . "<br>";
       		}	   
       		echo $comment_name;
    		echo "<br>";
    		echo $comment_content;
    	}
       		
    ?>
</div>

<!-- "Login" button-->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
    <input type="submit" value="Login">
</form>

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
		<input type="hidden" name="e" value="displayEntry">
		<input type="hidden" name="a" value="<?php echo $i ?>">
    	<input type="submit" value="<? echo $title ?>">
	</form>
    <?php
    }
    ?>
</div>


