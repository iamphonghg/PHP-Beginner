<?php 
	$arrayName = ['Phong', 'Yeu', 'Hoa'];
	$arrayName[1] = 'Hoang Gia Phong';
	$arrayAge = array(20, 39, 49);
	$arrayAge[] = 60;
	array_push($arrayAge, 70);
	$merge = array_merge($arrayAge, $arrayName);
	print_r($merge);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		* {
			font-family: JetBrains Mono;
		}
	</style>
</head>
<body>
	
</body>
</html>
	
