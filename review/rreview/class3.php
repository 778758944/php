<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-22 20:20:24
 * @version $Id$
 */

class A{
	public $att1="you";
	private $son="koko";
	protected $son2="sdsd";//继承后外部仍然不可见
	function num($num){
		return num;
	}
	final function pp(){//禁止重载，如有重载就报错
		return "long";
	}
}
//在继承中必须写明修饰符
class B extends A{
	public $att2="yong";
	// function pp(){
	// 	return "jack";
	// }
	function __get($name){
		return $this->$name;
	}
}
//定义借口
interface Display{
	public function display();
}//只是用来规定一个类应该有多少方法
class C implements Display{
	public function display(){
		echo "interface";
	}
}
class C extends B{

}
$b=new B;
$a=new A;
$c=new C;

echo $a->pp()."<br/>";
echo $b->att1."<br/>";
echo $b->att2."<br/>";
echo $b->num(1)."<br/>";
echo $b->pp()."<br/>";
echo $b->son2."<br/>";
echo $c->display()."<br/>";
echo "private ".$b->son."<br/>";
?>




















