<form action="index.php" method="GET">
	<input type="hidden" name="c" value="blog">
	<input type="hidden" name="view" value="blogview">
    <input type="submit" value="Add new entry">
</form>


<form action="index.php" method="GET">
	<input type="hidden" name="c" value="main">
	<input type="hidden" name="view" value="notloggedin">
    <input type="submit" value="Logout">
</form>


<div id="newest">
    <b>Most recent entry<br></b>
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
</div>

<div id="list" style="height:200px;width:400px;float:right;">
    Entry list<br>
    <a href="" target="_blank">1st entry</a>
    <form action="">
        <input type="button" value="Delete">
    </form>
</div>

<div id="comment" style="height:200px;width:700px;float:left;">
    <b>Comments</b>
    
</div>



