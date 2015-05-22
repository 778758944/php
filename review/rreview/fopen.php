<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-20 17:37:44
 * @version $Id$
 */
@$fp=fopen("orders2.txt","rw");
if(!$fp){
	echo "<p>can not open</p>";
}else{
	echo "<p>opened</p>";
}
$out="front-end";
fwrite($fp,$out);
?>