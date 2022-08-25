<?php
echo "<h1>PHP</h1>";

$hello = "Hello";
$world = "World!";

echo $hello . ' ' . $world;
$firstnames = ["David", "Robert", "Jonathan"];
echo "<p>$firstnames[0]</p>";
var_dump($firstnames);

$firstnames[0] = "Cédric";
var_dump($firstnames);
?>
