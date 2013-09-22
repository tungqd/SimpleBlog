<?php
/**
* entry.php
*
* This file reads data stored in the entries folder concerning the most recent blog entry.
* It is a model for controller blog.php
*
* @author   Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/



function getEntry()
{
	
	$file_handle1 = fopen("./entries/0/blog.txt", "r");
	$file_handle2 = fopen("./entries/0/100.txt", "r");
	$file_handle3 = fopen("./entries/0/200.txt", "r");
	return array($file_handle1, $file_handle2, $file_handle3);

}









?>
