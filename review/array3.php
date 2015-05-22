<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-19 13:22:55
 * @version $Id$
 */
$product=array("Tires","oil","spark");
$price=array(100,10,4);
$prices=array("TIRE"=>100,"OIL"=>10,"SPA"=>4);
asort($prices);//以具体值对关联数组排序
ksort($prices);//以关键字对数组排序

sort($product,SORT_STRING);
sort($price,SORT_NUMERIC);//数字数组排序有用，二参可选，表示要比较的类型
rsort($price);//反向排序
for($i=0;$i<3;$i++){
	echo $price[$i]."<br/>";
}
$product3=array(array("TIR","Tires",100),array("OIL","oil",10),array("SPK","Spark",4));
function compare($x,$y){
	if($x[2]==$y[2]){
		return 0;
	}
	if($x[2]>$y[2]){
		return -1;
	}else{
		return 1;
	}
}
usort($product3,'compare');//可以传递比较函数的排序方法，二参为比较函数,函数名一字符串形式调用
for($k=0;$k<3;$k++){
	for($j=0;$j<3;$j++){
		echo $product3[$k][$j]."<br/>";
	}
}




?>