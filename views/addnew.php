
<form name="addEntry" action="index.php?c=blog" id="addBlog" method="POST">
		<input type="hidden" name="ac" value="addEntry">
		<input type="hidden" name="e" value="<?php echo time(); ?>">
        Title: <input type="text" name="title"/><br>
        Content: <br>
        <textarea rows="4" cols="50" name="content" form="addBlog"></textarea>
    	<input type="submit" value="Submit">
</form>
