<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-02-19 14:15:53
 * @version $Id$
 */
$order=file("orders.txt");
$len=count($order);
?>
<html>
	<head>
		<title>bob's orders</title>
	</head>
	<body>
		<div align="center">
			<table border="1">
				<tr>
					<th bgcolor="#ccc">order date</th>
					<th bgcolor="#ccc">tires</th>
					<th bgcolor="#ccc">oil</th>
					<th bgcolor="#ccc">spark</th>
					<th bgcolor="#ccc">total</th>
					<th bgcolor="#ccc">adress</th>
				</tr>
				<?php
					for($k=0;$k<$len;$k++){
						$line=explode("\t", $order[$k]);//类似于split()
						echo "<tr>
								<td>$line[0]</td>
								<td>$line[1]</td>
								<td>$line[2]</td>
								<td>$line[3]</td>
								<td>$line[4]</td>
								<td>$line[5]</td>
						      </tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>