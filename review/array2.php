<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-19 13:06:46
 * @version $Id$
 */
$product=array(array("TIR","Tires",100),array("OIL","oil",10),array("SPK","spark",4));
// echo $product[0][1];
for($i=0;$i<3;$i++){
	for($c=0;$c<3;$c++){
		echo  "|".$product[$i][$c];
	}
	echo "<br/>";
}
$products=array(array("code"=>"TIR","DES"=>"tires","PRI"=>100),
	            array("code"=>"oil","DES"=>"oil","PRI"=>10),
	            array("code"=>"SPK","DES"=>"spark","PRI"=>4));
for($k=0;$k<3;$k++){
	while(list($key,$value)=each($products[$k])){
		echo "|$value";
	}
	echo "<br/>";
}
?>