<?php

echo "<h3> Numbers </h3>";
echo "<p> (defined in 'numbers.php') </p>";

$float= gettype(34.45);
$integer= gettype(12);

echo "Tipo de 34.45: {$float} <br>";
echo "Tipo de 12: {$integer} <br>";

$number1= '34';

//php does the arithmetic operations instead of concatenating both as one string
echo $number1 + 56;

?>