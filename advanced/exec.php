<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-27 19:35:38
 * @version $Id$
 */
chdir("upload/");//改变目录
echo getcwd()."<br/>";//获得当前目录
// passthru('ls -la');//现实当前文件夹下所有文件信息］
echo system('ls -la');//执行命令行的名利,返回最后一行
// $result=`ls -la`;
// echo $result;

// exec("ls -la",$result);
// foreach($result in $line){
// 	echo $line."<br/>";
// }
// echo "</pro>";
// echo "<br/><br/><br/>";
?>