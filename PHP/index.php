<?php
echo "<h1>Hello World!</h1>";

$hello = "Hello";
$world = "World!";

echo $hello . ' ' . $world;
$firstnames = ["David", "Robert", "Jonathan"];
echo "<p>$firstnames[0]</p>";
var_dump($firstnames);

$firstnames[0] = "Cédric";
var_dump($firstnames);
echo "<br />";
echo "<br />";
echo "<br />";


// ===

// 1. Créer un tableau fruits contenant les valeurs : pomme, banane, orange, citron.
$fruits = ["pomme", "banane", "orange", "citron"];

// 2. Modifier citron en citron vert.
$fruits[3] = "citron vert";
var_dump($fruits);

echo "<br />";
echo "<br />";

// 3. Ajouter le fruit poire.
$fruits[] = "poire";
var_dump($fruits);
?>