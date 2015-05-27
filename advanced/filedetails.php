
<html>
	<head>
		<title>File Details</title>
	</head>
	<body>
		<?php 
		$current_dir="upload/";
		$file=basename($file);
		echo $file."<br/>";
		echo "<h1>Details of files:".$file."</h1>";
		echo "<h2>filedata</h2>";
		echo 'file last accessed:'.date('j F Y H:i',fileatime($file))."<br/>";
		echo 'file last modify:'.date('j F Y H:i',filemtime($file))."<br/>";

		$user=posix_getpwuid(fileowner($file));
		echo "file owner:".$user["name"]."<br/>";

		$group=posix_getgrgid(filegroup($file));
		echo "file group:".$group["name"]."<br/>";

		echo "file premission:".decoct(fileperms($file))."<br/>";
		echo "file type: ".filetype($file)."<br/>";
		echo "file size: ".filesize($file)."<br/>";
		?>
	</body>
</html>




























