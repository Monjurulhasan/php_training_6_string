<?php 
$string = "Hello world,world How are you";
$string2 = "The quick brown fox has jumps over the lazy dog";
$wordCount = str_word_count($string, 0);
print_r($wordCount);
echo PHP_EOL;

$parts = explode(",", $string);
print_r($parts);
echo PHP_EOL;

$original = join(",", $parts);
echo $original;

$parts2 = str_split($string);
print_r($parts2);

// How to calculate specific character count 
$spacificWord = substr_count($string, 'H');
echo $spacificWord;
echo PHP_EOL;

$parts3 = strtok($string, " ,");
// while($parts3 !== false){
//     echo $parts3 . "\n";
//     $parts3 = strtok(" ,");
// }
print_r($parts3);

$parts4 = strtok($string2, " ");
while($parts4 !== false){
    echo $parts4 . "\n";
    $parts4 = strtok(" ");
}
echo PHP_EOL;

$parts5 = preg_split("/ |,/", $string);
print_r($parts5);