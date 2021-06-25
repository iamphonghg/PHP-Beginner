<?php 
	// $age = 20;
	// if ($age >= 18) {
	// 	echo 'adult';
	// } elseif (10 <= $age and $age < 18) {
	// 	echo 'youth';
	// } else {
	// 	echo 'kid';
	// }
	
	$products = [
		['name'=>'shiny star', 'price'=>20],
		['name'=>'green shell', 'price'=>10],
		['name'=>'red shell', 'price'=>15],
		['name'=>'gold coin', 'price'=>9],
		['name'=>'lighting bolt', 'price'=>40],
		['name'=>'banana skin', 'price'=>2]
	];
	
	// foreach ($products as $product) {
	// 	// if ($product['price'] < 15 and $product['price'] > 2) {
	// 	// 	echo $product['name'] . '</br>';
	// 	// }
		
	// 	if ($product['price'] > 20 or $product['price'] < 10) {
	// 		echo $product['name'] . '</br>';
	// 	}
	// }

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
	<div>
		<ul>
			<?php foreach ($products as $product) { ?>
				<?php if ($product['price'] > 15) { ?>
				<li><?php echo $product['name']; ?></li>
				<?php } ?>
			<?php } ?>
		</ul>
	</div>
</body>
</html>