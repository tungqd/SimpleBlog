<form 
    <input type="hidden" name="c" value="main.php">
    <input type="hidden" name="view" value="notloggedin.php">
    <input type="hidden" name="e" value="timestamp">
</form>


<form action="index.php" method="GET">
	<input type="hidden" name="c" value="login">
	<input type="hidden" name="view" value="loginscreen">
    <input type="submit" value="Login">
    


<div id="newest">
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

<div id="list">
    <b>Entry list<br></b>
    <?php echo $data['title'].'<br>'; ?>
</div>


