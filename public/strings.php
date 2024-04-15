<?php

echo "<h2> Strings </h2>";
echo "<p> (defined in 'strings.php') </p>";

#takes the raw value of the text
$name= 'marto $age';

echo ($name)."<br>";

echo gettype($name)."<br>";

$age= 21;

$name= "marto {$age}";

#uses the variable value;
echo ($name."<br>");


?>