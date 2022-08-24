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
echo "-----------------------------------";
echo "<br />";


// ===
echo "<h2>EXO 1</h2>";

// 1. Créer un tableau fruits contenant les valeurs : pomme, banane, orange, citron.
$fruits = ["pomme", "banane", "orange", "citron"];

// 2. Modifier citron en citron vert.
$fruits[3] = "citron vert";
var_dump($fruits);

echo "<br />";
echo "<br />";

// 3. Ajouter le fruit poire.
$fruits[] = "poire";

// 4. Afficher le nouveau fruit
echo $fruits[4];

echo "<br />";
echo "<br />";
echo "-----------------------------------";
echo "<br />";

// ===
echo "<h2>EXO 2</h2>";
echo "<p>Les tableaux associatifs</p>";

$person = [
    'firstname' => 'John',
    'name' => 'Dupont'
];

echo $person['firstname'];

echo "<br />";
echo "<br />";

var_dump($person);

$person['firstname'] ='François';
var_dump($person);

echo "<br />";
echo "<br />";

$person['age'] = 41;
var_dump($person);
    
// EXO
/*
    Exercice 2
    1. Créer un tableau associatif $car contenant :
    - brand : Citroën
    - model : C4
    - year : 2018
    - motor : Diesel
    Afficher le tableau $car.
    2. Modifier l'année pour mettre 2020
    3. Ajouter la donnée power avec comme valeur : 120
*/
?>
