<?php 
$string = "Hello World";
// echo $string[0];
// echo "\n";
// echo $string[-1];

$length = strlen($string);
echo substr($string, $length-3);
echo PHP_EOL;
echo substr($string, -3);
echo PHP_EOL;
echo substr($string, -7,-4);