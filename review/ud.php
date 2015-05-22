<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-18 09:20:19
 * @version $Id$
 */

	$tireqty=$_POST["tireqty"];
	$oilqty=$_POST["oilqty"];
	$sparkqty=$_POST["sparkqty"];
	$adress=$_POST["adress"];
	$root=$_SERVER["DOCUMENT_ROOT"];
	$date=date("H:i jS F Y");
?>
   <html>
   	<head>
   		<title>auto parts</title>
   	</head>
   	<body>
   		<h1>Bobs auto parts</h1>
   		<h2>order result</h2>
   		<?php
   		echo "<p>order process at ".date("H:i jS F Y")."</p>";
   		echo "<p>your order is as follows:</p>";
   		$total=0;
   		$total=$oilqty+$tireqty+$sparkqty;
   		if($total==0){
   			echo "you are not order anything";
   		}
   		else{
   			if($tireqty>0){
   				echo "<p>$tireqty tires</p>";
   			}
   			if($oilqty>0){
   				echo "<p>$oilqty oil</p>";
   			}
   			if($sparkqty>0){
   				echo "<p>$sparkqty spark</p>";
   			}
   		}
   		$amout=0.00;
   		define("TIRE",100);
   		define("OIL",10);
   		define("SPARK",4);

   		$amout=$tireqty*TIRE+$oilqty*OIL+$sparkqty*SPARK;
   		echo "<p>amout is $amout</p>";
   		echo "<p>your adress is $adress</p>";

   		$output=$date."\t".$tireqty."tires \t".$oilqty."oil\t".$sparkqty."spark\t".$amout."\t".$adress."\n";
   		//打开文件
   		@$fp=fopen("orders.txt","ab");//打开或者新建文件路径，ab代表只读模式，
   		flock($fp,LOCK_EX);

   		if(!$fp){
   			echo "<p><strong>your order can not processed at this time</strong></p></body></html>";
   			exit;
   		}
   		fwrite($fp,$output,strlen($output));//判断字符串的长度strlen,包含文件指针$fp，要添加的内容$output,字符创的长度
   		flock($fp,LOCK_UN);
   		fclose($fp);
   		echo "<p>order write</p>";
   		?>
   	</body>
   	</html>
