<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-26 20:29:55
 * @version $Id$
 */
?>
<html>
	<head>
		<title>scandir</title>
	</head>
	<body>
		<h1>directory listing</h1>
		<?php 
		$current_dir="./upload/ed.html";
		if(is_dir($current_dir)){
			echo "this is floder";
		}
		else if(is_file($current_dir)){
			echo "this is file"."<br/>";
			echo "the size is".filesize($current_dir)."<br/>";
			echo "the time of modify ".date('j F Y H:i',filemtime($current_dir));
		}

		// $files=scandir($dir);
		// $file=$files[4];
		echo "<h1>detail of file $file</h1>";
		echo "file last accessed:".date('j F Y H:i',fileatime($dir))."<br/>";
		?>
	</body>
</html>