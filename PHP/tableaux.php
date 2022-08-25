<?php
echo "<h2>Tableaux</h2>";
echo "<h3>Exo 1</h3>";

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
echo "<h2>Tableaux associatifs</h2>";
echo "<h4>Démo</h4>";

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

echo "<h3>Exo 2</h3>";
echo "<p>Afficher le tableau car.</p>";

/*
    Exercice 2
    1. Créer un tableau associatif $car contenant :
    - brand : Citroën
    - model : C4
    - year : 2018
    - motor : Diesel
*/

$car = [
    'brand' => "Citroën",
    'model' => "C4",
    'year' => 2018,
    'motor' => "Diesel"
];

// Afficher le tableau $car.
var_dump($car);

//  2. Modifier l'année pour mettre 2020.
$car['year'] = 2020;

//  3. Ajouter la donnée power avec comme valeur : 120.
$car['power'] = 120;
?>