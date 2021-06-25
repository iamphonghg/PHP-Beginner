<?php
  	// $quote = readfile('readme.txt');
  	// echo $quote;

	$file = 'test.txt';
	if (file_exists($file)) {
		// //read file
		// echo readfile($file) . '</br>';
		// //copy file
		// copy($file, 'quote.txt');
		// //absolute path
		// echo realpath($file) . '</br>';
		// //file size
		// echo filesize($file) . '</br>';
		// //rename file
		// rename($file, 'test.txt');
		
	} else {
		echo 'File does not exist';
	}

	//make directory
	mkdir('quotes');

?>