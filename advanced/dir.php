<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-26 19:56:53
 * @version $Id$
 */

?>
<html>
	<head>
		<title>dir</title>
	</head>
	<body>
		<h1>browsing</h1>
		<?php
		//获得目录引用
		$current_dir="upload/";
		$dir=opendir($current_dir);
		echo "<p>upload dir is $current_dir</p>";
		echo "<p>dir listing </p><ul>";

		while(false!=($file=readdir($dir))){
			echo "<li>$file</li>";
		}
		closedir($dir);
		?>
	</body>
</html>