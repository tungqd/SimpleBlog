<form 
    <input type="hidden" name="c" value="blog.php">
    <input type="hidden" name="v" value="blogview.php">
    <input type="hidden" name="e" value="timestamp">
</form>



<div id="newest" style="height:200px;width:700px;float:left;">
    <b>Most recent entry</b><br>
    <p><br><br><br><br></p>
    <form name="add">
        Name<input type="text" name="name"/><br>
        Comment<input type="text" name="comment"/>
        <form action="index.php" method="POST">
			<input type="hidden" name="c" value="main">
			<input type="hidden" name="view" value="blogview">
    		<input type="submit" value="Submit comment">
    	</form>
    </form>
</div>

<div id="list" style="height:200px;width:400px;float:right;">
    Entry list<br>
    <a href="" target="_blank">1st entry</a>
    <form action="index.php" method="POST">
		<input type="hidden" name="c" value="main">
		<input type="hidden" name="view" value="blogview">
    	<input type="submit" value="Delete comment">
    </form>
</div>

<div id="comment" style="height:200px;width:700px;float:left;">
    <b>Comments</b>
</div>
