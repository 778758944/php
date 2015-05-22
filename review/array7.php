<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-19 14:31:41
 * @version $Id$
 */
$arr=array(1,2,3);
// echo current($arr)."<br/>";//返回数组内部的当前指针
// echo each($arr);//指针后移并返回移动前的元素
// echo next($arr)."<br/>";//指针后移返回当前元素
// echo current($arr);
// echo end($arr);//将指针定位至最后一个元素
// echo reset($arr);//将指针拨回第一个元素
// end($arr);
// echo prev($arr);//与next()相反
$ha=1;
function my_print($value,$key,$userdata){//数组元素传递顺序，value,key,userdata
	$value+=$userdata;
	echo $value."<br/>";
}
array_walk($arr,'my_print',$ha);//将每个数组元素作为参数执行二参指定函数

echo count($arr)."<br/>";
echo sizeof($arr);
$ac=array_count_values($arr);//返回以数组元素为关键字，频率为值的关联数组
echo $ac[1]."<br/>";

$arr2=array("key1"=>"value1","key2"=>"value2","key3"=>"value3");
extract($arr2);//将数组转化为标量变量
echo "$key1 $key2 $key3";

$arr3=array("key1"=>"value1","key2"=>"value2","key3"=>"value3");
extract($arr3,EXTR_PREFIX_ALL,"MY");
echo "$MY_key1 $MY_key2 $MY_key3";

?>