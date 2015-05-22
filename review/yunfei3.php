<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
    <table border="0" cellpadding="3">
    	<tr>
    		<td bgcolor="#ccc" align="center">distance</td>
    		<td bgcolor="#ccc" align="center">Cost</td>d
    	</tr>
    	<?php
    	for($distance=50;$distance<=250;$distance+=50){
    		echo "<tr><td>".$distance."</td><td>".($distance/10)."</td></tr>\n";
    	}
    	?>
    </table>
</body>
</html>