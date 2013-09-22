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
	$fileName1 = "/hw2/entries/0/blog.txt";
	$fileName2 = "/hw2/entries/0/100.txt";
	$file_handle1 = fopen($filename1, "w");
	$file_handle2 = fopen($filename2, "w");
	return array($file_handle1, $file_handle2);

}









?>
