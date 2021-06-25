<?php 
	$name = 'Phong';

	// function sayHello() {
	// 	global $name;
	// 	$name = 'new';
	// 	echo "hello $name";
	// }
	// sayHello();
	// echo $name;

	function sayBye(&$name) {
		$name = 'Phong Gia';
		echo "bye $name";
	}
	sayBye($name);
	echo $name;
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