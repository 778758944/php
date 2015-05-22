<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-21 20:15:55
 * @version $Id$
 */
function fn(){
	echo "var is ".$var."<br/>";//在echo里面调用全局变量的时候视为一个新局部变量
	$var="2";
	echo "var is ".$var."<br/>";
	global $ee;
	$ee="3";
	echo '$ee is'. $ee."<br/>";
}

$var="1";
fn();
$ee="4";
fn();
echo "var is ".$var."<br/>";
echo $ee."<br/>";
function add(&$value){//按引用传递
	$value=$value+1;
}
$a=10;
echo $a;
add($a);
echo $a;
function reverse_r($str){
	if(strlen($str)){

		reverse_r(substr($str,1));
	}

	echo substr($str,0,1);
	return;
}
reverse_r("hello");
?>



















