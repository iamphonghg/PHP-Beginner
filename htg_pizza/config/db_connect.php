<?php 
	// connect to database
	$connect = mysqli_connect('localhost', 'htg', 'htg', 'htg_pizza');
	// check connection
	if (!$connect) {
		echo 'Connection error: ' . mysqli_connect_error();
	}

?>