<h1>Add Blog - <a href=index.php><?php echo SITENAME?></a></h1>
<form id="addNewEntry" name="addEntry" action="index.php?c=blog" id="addBlog" method="POST">
		<input type="hidden" name="ac" value="addEntry">
		<input type="hidden" name="e" value="<?php echo time(); ?>">
        Title: <input type="text" name="title"/><br>
        Content: <br>
        <textarea rows="4" cols="50" name="content"></textarea>
    	<input type="submit" value="Submit">
</form>
