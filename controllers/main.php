<?php
/**
* main.php
*
* This file accesses the data in the most recent blog entry and is used for adding 
* a comment.
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
	function main_controller(){
		// Read the contents of config file if it exists.
		if( file_exists("./entries/[%timestamp%]/blog.txt") ){
			$string_file_contents = file_get_contents("./entries/[%timestamp%]/blog.txt");
		}
	}
?>