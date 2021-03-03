<?php  
$string = "The quick brown fox jumps over the fox lazy dog";

// echo strpos($string, "dog"); //case sensitive 
// echo stripos($string, "Dog"); //case insensitive

// $offset = strpos($string, "The");
// if($offset !== false){
//     echo "\n Word was found \n";
// }else{
//     echo "\nWord was not found \n";
// }

// $offset = strpos($string, "fox");
// echo $offset;

$offset = strrpos($string, "fox");
echo $offset;