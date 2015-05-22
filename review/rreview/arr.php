<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-20 20:11:21
 * @version $Id$
 */
$products=array("tires","oils","spark");//新建数组
$number=range(1,10);
echo $number[2];
for($i=0;$i<3;$i++){
	echo $products[$i]."<br/>";
}
foreach($products as $current){
	echo $current."<br/>";
}
$price=array("Tires"=>100,"oil"=>10,"Spark Plug"=>4);//创建关联数组
while(list($key,$value)=each($price)){
	echo $key."-".$value."<br/>";
}
$order=file("orders2.txt");
$count=count($order);
echo $count."<br/>";
for($i=0;$i<$count;$i++){
	echo $i."<br/>";
	echo $order[$i]."<br/>";
}
?>