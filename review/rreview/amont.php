<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-20 16:37:01
 * @version $Id$
 */
define("tireprice",100);
define("oilprice",80);
define("sparkprice",90);
$tires=$_POST["tireqty"];
$oils=$_POST["oilqty"];
$spark=$_POST["sparkqty"];
$find=$_POST["find"];
$tireamout=tireprice*$tires;
$oilamout=oilprice*$oils;
$sparkamout=sparkprice*$spark;
$totalamout=$tireamout+$oilamout+$sparkamout;
echo "<p>tire:$tireamout</p>";
echo "<p>oil:$oilamout</p>";
echo "<p>spark:$sparkamout</p>";
echo "<p>totalamout:$totalamout</p>";
switch($find){
	case 'a':
		echo "<p>find by paper</p>";# code...
		break;
	case 'b':
		echo "<p>find by tv</p>";# code...
		break;
	case 'c':
		echo "<p>find by internet</p>";# code...
		break;
	case 'd':
		echo "<p>find by people</p>";# code...
		break;
    default:
        echo "<p>noway</p>";
        break;
}
@$fp=fopen("orders2.txt","ab");
$date=date("H:i jS F Y");
$output=$date."\t".$tireqty."tires \t".$oilqty."oil\t".$sparkqty."spark\t".$totalamout."\t".$adress."\n";
if($fp){
	echo "<p>opend</p>";
	fwrite($fp,$output);
	fclose($fp);
}
?>











































