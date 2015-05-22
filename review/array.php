<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-18 11:05:11
 * @version $Id$
 */

$product=array("tires","oil","spark");//创建数组
$num=range(1,10);//返回从1-10的数组
$odds=range(1,10,2);//三参可以指定不长
$letter=range("a","z");//生成A-z的字母数组
for($i=0;$i<3;$i++){
	echo $product[$i]."<br/>";
}
$price=array("tires"=>100,"oil"=>10,"spark"=>4);
// foreach($price as $key=>$value){
// 	echo $key."-".$value."<br/>";
// }
while($element=each($price)){
	echo $element["key"]."-".$element["value"]."<br/>";
}
reset($price);//使用each（）函数会记录数组的位置，再次遍历用reset()重置
while(list($pro,$pri)=each($price)){//list（）将key和value分开，list允许命名新变量
	echo "$pro-$pri<br/>";
}

?>

<html>
	<head>
		<title>array</title>
	</head>
	<body>
	</body>
</html>

