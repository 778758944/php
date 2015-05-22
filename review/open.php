<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-18 09:56:28
 * @version $Id$
 */
?>
<html>
	<head>
		<title>bob's auto parts</title>
	</head>
	<body>
		<h1>bob's auto parts</h1>
		<h2>customer order</h2>
		<?php
		@$fp=fopen("orders.txt","rb");
		if(!$fp){
			echo "<p>faulair try again please</p>";
			exit;
		}
		// while(!feof($fp)){//判断是是否读完文件
		// 	$order=fgets($fp,999);//读取文件，二参表示文件的长度，碰到'\n',eof,或最大数据量时停止读取；
		// 	echo $order."<br/>";
		// }
		// $dd=readfile("orders.txt");//一参代表路劲，返回字节数，打开文件回显至浏览器
		// echo "<br/>$dd";

		// $ga=fpassthru($fp);读取成功返回false,失败返回true;

		// $filearr=file("orders.txt");//将数据一行为单位保存在数组中
		// echo "$filearr.length";

		// $char=fgetc($fp);//读取单个字符
		// echo $char;

		// $str=fread($fp,30);//读取二参所表示的字节；
		// echo "$str";
		// echo "jajaj";

		// if(file_exists("rreview/orders2.txt")){//判断文件是否存在
		// 	echo "file exited";
		// }else{
		// 	echo "no file";
		// }

		// echo filesize("orders.txt");返回文件大小
		// unlink("rreview/orders2.txt");//删除文件，返回布尔值

		// echo "final position ".(ftell($fp))."<br/>";//显示文件指针位置
		// rewind($fp);//将文件指针恢复值初始位置
		// echo "after rewind position ".(ftell($fp))."<br/>";
		// fseek($fp, 3);//将指针进行重新定位；
		// echo ftell($fp);
		
		?>
	</body>
</html>