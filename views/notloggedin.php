<div id="newest">
    <b>Most recent entry<br></b>

    <?php 
    	/*
    	echo $data['title'].'<br>';
    	echo $data['content'].'<br>';
    	echo "Comments".'<br>';
    	echo $data['name1'].":".'<br>';
    	echo $data['comment1'].'<br>';
    	echo $data['name2'].":".'<br>';
    	echo $data['comment2'].'<br>';
    	*/
    	
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
<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
    <input type="submit" value="Login">
</form>

<div id="list">
    <b>Entry list<br></b>
    <?php 
    	$blog = $data[0];
    	$title = $blog[0];
    	echo "<a href = './controllers/blog.php'>{$title}</a>";
    ?>
</div>


