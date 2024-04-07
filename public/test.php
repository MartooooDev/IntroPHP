<?php
include_once "./variableExample.php";
include_once "./constantExample.php";

echo "<h2>Test Page</h2>";
echo "<h3>Variables/ gettype</h3>";
echo "<p>(defined in 'variableExample.php')</p>";

echo gettype($name)."<br>";
echo gettype($integerNumber)."<br>";
echo gettype($floatNumber)."<br>";
echo gettype($worldExploded)."<br>";
echo gettype($iWillLearnPHP)."<br>";
echo gettype($array)."<br>";
echo gettype(new Person)."<br>";
echo gettype(null);

echo "<br>";
echo "<br>";

echo "<h3> Constants </h3>";
echo "<p>(defined in 'constantExample.php')</p>";

echo NAME."<br>";

?>