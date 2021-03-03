<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASCII</title>
</head>
<body>
<div class="container">

</div>
<?php 
    // ASCII to CHR
    echo '<table  border="1">';
    for($i=32;$i<=126;$i++){
        echo "<tr><td>" . $i . "</td><td>" . '-' . "</td><td>" . chr($i) . "</td></tr>".  "\n";
    }
    echo "</table>";

    // CHR to ASCII
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    echo '<table  border="1">';
    for($i=0;$i<strlen($str);$i++){
        echo "<tr><td>" . $str[$i]. "</td><td>" . "-" . "</td><td>" . ord($str[$i]) . "</td></tr>";
    }
    echo "</table>"; 

?>
</body>
</html>