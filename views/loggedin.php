<!-- "Add new entry" button -->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="blog">
	<input type="hidden" name="view" value="blogview">
    <input type="submit" value="Add new entry">
</form>

<!-- "Logout" button -->
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="main">
	<input type="hidden" name="view" value="notloggedin">
    <input type="submit" value="Logout">
</form>


<!-- Entry panel -->
<div id="newest">
    <!-- <b>Most recent entry<br></b> -->

    <?php 	
    	$mostRecentEntry = $data[0]; //Assign the latest entry in $data into $mostRecentEntry
    
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
       		echo "Comment:"."<br>";
       		echo $comment_name;
    		echo "<br>";
    		echo $comment_content;
    	}
    ?>
</div>

<!--
<div id="list" style="height:200px;width:400px;float:right;">
    Entry list<br>
    <a href="" target="_blank">1st entry</a>
    <form action="">
        <input type="button" value="Delete">
    </form>
</div> 
-->
<!--
<div id="comment" style="height:200px;width:700px;float:left;">
    <b>Comments</b>
    
</div> -->

<!-- Entry list -->
<div id="list">
    <b>Entry list<br></b>
    <?php 
    	for ($i=0; $i < count($data); $i++) {
    		$title = $data[$i][0][0];  
    ?>
    
    <!-- Loop to display list of entries -->
    <form action="index.php" method="GET">
		<input type="hidden" name="c" value="main">
		<input type="hidden" name="view" value="blogview">
		<input type="hidden" name="e" value="displayEntry">
    	<input type="submit" value="<? echo $title ?>">
	</form>
    <?php
    }
    ?>
</div>

