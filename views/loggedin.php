<form 
    <input type="hidden" name="c" value="main.php">
    <input type="hidden" name="v" value="loggedin.php">
    <input type="hidden" name="e" value="timestamp">
</form>

<form action="blog.php" method="GET">
    <input type="button" value="Add new entry" >
</form>


<div id="newest" style="height:200px;width:700px;float:left;">
    <b>Most recent entry</b>
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



