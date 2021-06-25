<?php 
	// multi-dimensional arrays

	$blogs = [
		'blog1'=>['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
		'blog2'=>['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
		'blog3'=>['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
	];
	// print_r($blogs['blog1']['title']);
	// $blogs['blog4'] = 4;
	// $blogs['blog5'] = 5;
	$blogs['blog1']['title'] = 'maria ozawa';
	// print_r($blogs);

	$popped = array_pop($blogs);
	print_r($popped);

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
	
