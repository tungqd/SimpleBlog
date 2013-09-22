<form action="login.php" method="GET">
    <input type="button" value="Login" >
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


