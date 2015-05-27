<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-26 20:22:36
 * @version $Id$
 */

?>
<html>
	<head>
		<title>dir2</title>
	</head>
	<body>
		<h1>browsing</h1>
		<?php 
		$dir=dir("upload/");
		echo "<p>handle is $dir->handle</p>";
		echo "<p>upload directoryis $dir->path</p>";
		echo "<p>Directory listing:</p><ul>";

		while(false !== ($file=$dir->read())){
			if($file!="."&&$file!=".."){
				echo "<li>$file</li>";
			}
		}
		echo "</ul>";
		$dir->close();
		?>
	</body>
</html>