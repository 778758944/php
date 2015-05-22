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
	<table>
		<tr>
			<td>distance</td>
			<td>price</td>
		</tr>
		<?php 
		$distance=50;
		$price=10;
		while($distance<250){
			echo "<tr>
			          <td>$distance</td>
			          <td>$price</td>
			     </tr>";
			$distance=$distance+50;
			$price=$price+10;
		}
		?>
	</table>
</body>
</html>