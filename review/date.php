<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-20 16:03:53
 * @version $Id$
 */

echo date("H:i, jS F Y")."<br/>";
echo $_POST["tireqty"]."<br/>";
$oil=$_POST["oilqty"];
echo '$oil oils<br/>';//单引号为绝对引号
echo "$oil oils<br/>";//双引号仍可读取变量
//php中函数名称可以任意大小写
//第一次给变量赋值才算创建了变量
define("TIREPRICE",100);//定义常量
echo TIREPRICE."<br/>";
$dd=56;
$ddd=0;
echo gettype($dd)."<br/>";
$c=true;
echo gettype($c)."<br/>";
echo settype($dd,"double")."<br/>";
echo "isset:".isset($cd)."<br/>";//已经赋值了为1
echo "empty:".empty($cd)."<br/>";//为0或空显示1
$num=1;
while ( $num<= 10) {
	echo $num."<br/>";
	$num++;
}

?>