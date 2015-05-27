<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-27 15:45:22
 * @version $Id$
 */
$content="upload/";
$dir=opendir($content);
while(false!==($file=readdir($dir))){
	echo '<a href="filedetails.php?file='.$file.'">'.$file."</a><br/>";
}

?>