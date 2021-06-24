<?php 
	// function sayHello($name = 'mr. default') {
	// 	echo "hello $name";
	// }

	// sayHello();

	function formatProduct($product) {
		return "{$product['name']} costs {$product['price']} </br>";
	}

	$products = [
		['name'=>'shiny star', 'price'=>20],
		['name'=>'green shell', 'price'=>10],
		['name'=>'red shell', 'price'=>15],
		['name'=>'gold coin', 'price'=>9],
		['name'=>'lighting bolt', 'price'=>40],
		['name'=>'banana skin', 'price'=>2]
	];

	foreach ($products as $product) {
		echo formatProduct($product);
	}
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