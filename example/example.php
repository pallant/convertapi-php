<?php

include('../vendor/autoload.php');

try {
	// Instantiate the class
	$code = 131231;//your real code
	$text2pdf = new ConvertAPI\Text2Pdf($code);
	// Convert the file
	$text2pdf->convert(__DIR__.'/input.txt', __DIR__.'/output.pdf');
} catch (Exception $e) {
	var_dump($e->getMessage());
}