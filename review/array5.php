<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-19 13:54:42
 * @version $Id$
 */
$pic=array("img/mx2.png","img/mx3.png","img/mx4.png");
shuffle($pic);//数组随机排序
$num=range(1,10);
array_push($num,11);//向数组末尾添加数据
echo $num[10]."<br/>";
array_pop($num);//从数组中删除最后一个元素
// echo $num[10]."<br/>";
$num=array_reverse($num);//返回一个逆向顺序的数组的副本
for($k=0;$k<10;$k++){
	echo $num[$k]."<br/>";
}
?>
<html>
<head>
	<title>bob's product</title>
</head>
</body>
	<div align="center">
		<tr>
			<?php
			for($i=0;$i<3;$i++){
				echo "<td><img src='".$pic[$i]."'></td>";
			}
			?>
		</tr>
	</div>
</body>
</html>