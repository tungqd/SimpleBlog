<div id="newest">

    <?php 	
    	//print_r($data);
    	/* Display entry itself */
    	$mostRecentEntry = $data[0];
    	$blog = $mostRecentEntry[0];
    	$title = $blog[0];
    	$content = "";
    	
		for ($i = 1; $i < count($data); $i++)    	
		{
    		$content .= $blog[$i] . "<br>";
    	}
    	
    	echo $title;
    	echo "<br><br>";
    	echo $content."<br>";
    	
    	/* Display array of comments */
    	for ($i = 1; $i < count($mostRecentEntry); $i++)
    	{
    		$comment = $mostRecentEntry[$i];
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
		<input type="hidden" name="c" value="main">
		<input type="hidden" name="view" value="blogview">
		<input type="hidden" name="e" value="displayEntry">
    	<input type="submit" value="<? echo $title ?>">
	</form>
    <?php
    }
    ?>
</div>


