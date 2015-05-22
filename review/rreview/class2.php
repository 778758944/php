<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-22 20:05:32
 * @version $Id$
 */

class Bile{
	public $name="jji";
	private $age=11;
	function __get($name){
		echo "get invorked";
		return $this->$name;
	}
	function __set($name,$value){
		echo "set invorked";
		$this->$name=$value;
	}
	function add($num1,$num2){
		return $num1+$num2;
	}
}
$bike=new Bile();
echo $bike->name."<br/>";//访问共有的时候直接访问，访问私有的时候通过get
echo $bike->age."<br/>";

$bike->$age=12;
echo $bike->age;
echo $bike->add(1,2);
// $bike->$name="jack";
// echo $bike->name;

?>