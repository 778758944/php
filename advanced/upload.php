<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-26 19:27:34
 * @version $Id$
 */

?>
<html>
	<head>
		<title>upload file</title>
	</head>
	<body>
		<h1>upload file</h1>
		<?php 
		if($_FILES["userfile"]['error']>0){
			echo "Problem: ";
			switch($_FILES["userfile"]["error"]){
				case 1:
				echo "File exceeded upload_max_filesize";
				break;

				case 2:
				echo "超过文件的最大容量";
				break;

				case 3:
				echo "文件只有部分上传";
				break;

				case 4:
				echo "文件没有上传";
				break;

				case 6:
				echo "没有指定缓存文件夹";
				break;

				case 7:
				echo "不能写入磁盘";
				break;
			}
			exit;
		}
		if($_FILES['userfile']['type']!="text/plain"){
			echo "problem:file is not plain text";
			exit;
		}

		//更换文件位置
		$upfile="/upload/".$FILES['username']['name'];
		if(is_uploaded_file($_FILES["username"]["tmp_name"])){
			if(!move_uploaded_file($_FILES["username"]["tmp_name"],$upfile)){
				echo "Problem : con not move";
				exit;
			}
		}
		else{
			echo "problem: could not file upload attack fileneme:";
			echo $_FILES["userfile"]["tmp_name"];
			exit;
		}

		echo "file upload success";
		?>
	</body>
</html>
























