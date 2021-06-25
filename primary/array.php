<?php 
	/*$arrayName = ['Phong', 'Yeu', 'Hoa'];
	$arrayName[1] = 'Hoang Gia Phong';
	$arrayAge = array(20, 39, 49);
	$arrayAge[] = 60;
	array_push($arrayAge, 70);
	$merge = array_merge($arrayAge, $arrayName);
	print_r($merge);*/

	// associative arrays (key & value pairs)

	$me = ['name'=>'Phong', 'age'=>30];
	// echo $me['name'];
	$me2 = ['abc'=>'Phong', 'nnn'=>30];
	// print_r($me2);
	$me['love'] = 'Hoa';
	$me['age'] = 20;
	print_r($me);
	echo '</br>' . count($me) . '</br>';
	$me3 = array_merge($me, $me2);
	print_r($me3);

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
	
