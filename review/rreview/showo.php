
<html>
	<head>
		<title>showlist</title>
	</head>
	<body>
		<h1>the order</h1>
		<?php
		echo "<p>php</p>";
	@$fp=fopen("orders2.txt","rb");
	if(!$fp){
		echo "<p>no opened</p>";
		exit;
	}
	while(!feof($fp)){
		$order=fgets($fp,999);
		echo $order."<br/>";
	}
	?>
	</body>
</html>

