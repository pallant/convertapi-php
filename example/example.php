<?php

<<<<<<< HEAD
include('../vendor/autoload.php');

try {
	// Instantiate the class
	$code = 12313132;//your real code
	$text2pdf = new ConvertAPI\Text2Pdf($code);
	// Convert the file
=======
// Include the required concrete conversion class
include('../Text2PDF.php');

try {
// Instantiate the class
	$text2pdf = new ConvertAPI\Text2Pdf();
// Convert the file
>>>>>>> 5b4972ba305a6a0362d6fa7198cfc62e824ecb57
	$text2pdf->convert(__DIR__.'/input.txt', __DIR__.'/output.pdf');
} catch (Exception $e) {
	var_dump($e->getMessage());
}