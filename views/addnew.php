<form name="addEntry">
        Title<input type="text" name="title"/><br>
        Content<input type="text" name="content"/>
        <form action="index.php" method="POST">
			<input type="hidden" name="c" value="blog">
			<input type="hidden" name="view" value="addnew">
    		<input type="submit" value="Submit">
    	</form>
</form>
