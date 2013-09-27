<form name="addEntry" action="index.php?c=blog" method="POST">
		<input type="hidden" name="ac" value="addEntry">
		<input type="hidden" name="e" value="<?php echo time(); ?>">
        Title<input type="text" name="title"/><br>
        Content<input type="textarea" name="content">
    	<input type="submit" value="Submit">
    	</form>
</form>
