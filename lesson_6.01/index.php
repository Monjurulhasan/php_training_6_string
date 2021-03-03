<?php 
$name = "Monjur";

$string01 = "my name is $name \n \t new line \n";

echo $string01;

$heredoc = <<<EOD
hello 
this is here doc 
example
EOD;

echo $heredoc;