<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-21 14:45:10
 * @version $Id$
 */
$a="\t sss sss\t";
echo $a."<br/>";
echo trim($a)."<br/>";//用来去除\t
$b="ggg \n hhh";
echo $b."<br/>";
echo nl2br($b)."<br/>";//用<br/>替换\n
$total=9.2;
$tol=9;
$tol2=10;
printf("amount is %.2f (with shipping %.2f) (with koo %.2f)",$total,$tol,$tol2);
printf("amount is %2\$.2f <br/>",$total,$tol2);
$str="you are dog";
print(ucwords($str)."<br/>");//单词首字母大写
$sds="\sdssddss'sdsds";
echo $sds."<br/>";
echo addslashes($sds)."<br/>";//转意引号斜杠，数据库专用
$email="778758944@qq.com";
$email_array=explode("@",$email);//分割字符串,类似split
echo $email_array[1];
echo $email_array[0];
$new_email=join("@",$email_array);
echo "<br/>".$new_email."<br/>";
$stt="abcdefg";
echo substr($stt,0,2)."<br/>";//取子串，三餐表示长度
echo strlen("hello")."<br/>";
echo strstr($stt,"cd")."<br/>";//返回字符串
echo strpos($stt,"cd")."<br/>";//返回位置
//stristr()不区分大小写
$need=array("a","b","c");
$new_need=array("1","3","5");
$hh=a2b4c6;
echo str_replace($need,$new_need,$hh)."<br/>";//替换指定字符，可以传递数组
$ass="ac121";
echo substr_replace($acc, "ooo", 1,1)."<br/>";
$qs="0a1b2c3d4";
$arr=array();
// ereg('[a-z]', $qs,$arr);
echo ereg_replace('[a-z]{1}[[:alnum:]]{1}',"p",$qs)."<br/>";//不支持\d

$arr2=split('[a-z]',$qs);//按正则分割字符串
echo $arr2[0];
?>












































