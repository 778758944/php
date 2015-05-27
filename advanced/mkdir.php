<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-26 20:37:03
 * @version $Id$
 */

$oldumask=umask(0);
mkdir("upload/test",0777);
umask($oldumask);
rmdir("upload/kk");
?>