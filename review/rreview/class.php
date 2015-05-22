<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-22 19:42:21
 * @version $Id$
 */
//创建一个类的操作

class Car{
	public $att1="newcar";
	function __construct($num){
		echo "the car number:".$num."<br/>";
	}
	function __get($name){
		echo "get invorked"."<br/>";
		return $this->$name;
	}
	function __set($name,$value){
		echo "set invorked"."<br/>";
		$this->$name=$value;
	}
}
$a=new Car("121");
$b=$a->att1."<br/>";//访问属性,去掉$
echo $b."<br/>";
$a->$att1="hello";
echo $a->att1."<br/>";
?>
