<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-27 19:18:03
 * @version $Id$
 */
touch("demo.html");
touch("upload/demo.txt");//创建一个文件
unlink("demo.html");//删除一个文件

copy("upload.html","upload/upload.html");
rename("upload/upload.html","upload/uuu.txt");


?>