<?php
$string = "Quick brown brown fox Fox jumps over the lazy dog";
// $replacedString = str_replace('brown', 'Brown', $string);
// $replacedString = str_ireplace('brown', 'red', $string, $count);
// echo $replacedString;
// echo PHP_EOL;
// echo $string;
// echo PHP_EOL;
// echo "Total Replace: {$count}";

// $string = str_replace(array('brown', 'fox'), array('red', 'cat'), $string, $count);
$string = str_ireplace(array('brown', 'fox', 'dog'), array('red', 'cat', 'hen'), $string, $count);
echo $string;
echo PHP_EOL;
echo "Total Replacement: {$count}";