<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-17 12:09:29
 * @version $Id$
 */
    $tire=$_POST["tireqty"];
    $oil=$_POST["oilqty"];
    $spark=$_POST["sparkqty"];
    $total=0;
    $amout=0;
    define("TIRE",100);
    define("OIL",40);
    define("SPARK",4);


    if($tire==0&&$oil==0&&$spark==0){
    	echo "you not buy anything";
    }
    else{
    	$total=$tire+$oil+$spark;
    	$amout=TIRE*$tire+OIL*$oil+SPARK*$spark;
    	if($total>10&&$total<30){
    		$amout-=$amout*0.05;
    	}
    	else if($total>30&&$total<50){
    		$amout-=$amout*0.1;
    	}
    	echo "total: $total"."<br/>";
    	echo "amout: $amout"."<br/>";
	}
	for($i=0;$i<10;$i++){
		echo $i."<br/>";
	}
?>
