<?php
/**
* entry_model.php
*
* This file reads and writes blog entries to and from the filesystem.
*
* @author Tung Dang, Loc Dang, Khanh Nguyen
*
*
*/
/**
This function adds an entry to the data model.
@param $timestamp the time entry was written.
@param $title the title of the entry.
@param $content of the post.
*/
function addEntry($timestamp, $title, $content)
{

	$folder = "./entries/" . $timestamp; //Create folder name for each entry
	if (!file_exists($folder)) 
	{
    		mkdir($folder, 0777);
  	}
  	else
  	{
  		return false;
  	}
  	
  	$file = $folder . "/blog.txt";
  	file_put_contents($file, $title . "\n");
  	file_put_contents($file, $content . "\n", FILE_APPEND);
  	return true;
}

/**
This function adds a comment for a paticular entry
*/
function addComment($index, $commentTimestamp, $name, $comment)
{
	$path = "./entries/";
	$entries = getDirEntries($path);
	rsort($entries);
	$path = $path . "/{$entries[$index]}";
	$file = $path . "/$commentTimestamp" . ".txt";
	file_put_contents($file, $name . "\n");
  	file_put_contents($file, $comment . "\n", FILE_APPEND);
}

/**
Gets the data for an entry
@param The timestamp when the entry created.
@return an array of arrays. The first array is for blog.txt, the rest is for comment.txt files.
*/
function getAnEntry($entryTimestamp)
{
	$path = "./entries/" . $entryTimestamp;
	
	$blog = file($path . "/blog.txt"); //data array for blog.txt
	$data = array($blog); //Array of data to be returned
	$comments = getDirEntries($path);
	arsort($comments);
	foreach($comments as $commentTimestamp)
	{
		if ($commentTimestamp != "blog.txt")
		{
			$content = file($path . "/$commentTimestamp");
			$data[] = $content;
		}	
	}
	return $data;
}

/**
Gets all the entries
@return an array where each element is an array of arrays (i.e: blog.txt and comment.txt files)
*/
function getAllEntries()
{
	$path = "./entries/";
	$entries = getDirEntries($path);
	arsort($entries);
	$data = array();
	foreach($entries as $entry)
	{
		$data[] = getAnEntry($entry);
	}
	return $data;
}

/**
Gets the most recent blog entry
*/
function getMostRecentEntry()
{
	$path = "./entries/";
	$entries = getDirEntries($path);
	sort($entries);
	$entry = $entries[count($entries) - 1];
	return getAnEntry($entry);
}

/**
Deletes a comment
@param $entryTimestamp the entry
@param $commentTimestamp the comment to be deleted 
*/
function deleteComment($entryIndex, $commentIndex)
{
	$path = "./entries/";
	$entries = getDirEntries($path);
	rsort($entries);
	$path = $path . "/{$entries[$entryIndex]}";
	$comments = getDirEntries($path);
	rsort($comments);
	$path = $path . "/{$comments[$commentIndex]}";
	unlink($path);
}

/**
Deletes an entry
@param $entryTimestamp the entry to be deleted
*/
function deleteEntry($index)
{
	$path = "./entries/";
	$entries = getDirEntries($path);
	rsort($entries);
	$path = $path . "/{$entries[$index]}";
	$files = getDirEntries($path);
	foreach($files as $file)
	{
		unlink($path . "/$file");
	} 
	unlink ($path. "/blog.txt");
	rmdir($path); 
}

/*
Gets all the entries in a directory
Return an array of all entries or false if can't open the directory
*/

function getDirEntries($path)
{
	$entries = array();
	if ($handle = opendir($path)) 
	{
    		while (false !== ($entry = readdir($handle))) 
    		{
        		if ($entry != "." && $entry != ".." && $entry != ".DS_Store" && $entry != "blog.txt") 
        		{
            		$entries[] = $entry;
        		}
    		}
    		closedir($handle);
	}
	else 
	{
		return false;
	}
	return $entries;
}

?>
