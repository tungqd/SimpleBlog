<form 
    <input type="hidden" name="c" value="main.php">
    <input type="hidden" name="view" value="notloggedin.php">
    <input type="hidden" name="e" value="timestamp">
</form>

<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loggedin">
    <input type="submit" value="Login">
    
</form>


<div id="newest" style="height:200px;width:700px;float:left;">
    <b>Most recent entry<br></b>

    <?php 

    	echo $data['title'].'<br>';
    	echo $data['content'].'<br>';
    	echo $data['name1'].'<br>';
    	echo $data['comment1'].'<br>';
    	echo $data['name2'].'<br>';
    	echo $data['comment2'].'<br>';
    ?>

</div>

<div id="list" style="height:200px;width:400px;float:right;">
    <b>Entry list<br></b>
    <?php echo $data['title'].'<br>'; ?>
</div>


