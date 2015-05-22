<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-05-21 19:47:48
 * @version $Id$
 */
$arr=array(1,2,3,4,5,6,7);
?>
<html>
	<head></head>
	<body>
			<?php
				function create($data){
				    echo "<table border=\"1\">";

					reset($data);
					$value=current($data);
					while($value){
						echo "<tr><td>$value</td></tr>";
						$value=next($data);
					}
					echo "</table>";
				}
				create($arr);

				function arsg(a,b,c,d){
					echo func_num_args();
					$arr=func_get_args();
					foreach($arr as $d){
						echo $d."<br/>";
					}

				}
				arsg(1,2,3,4);
			?>
	</body>
</html>



























