<?php
echo "<h1>Opérateur</h1>";

echo "<h2>Exo 1</h2>";

/*
    1. Créer deux variables :
    - $firstname qui aura pour valeur : Pierre.
    - $name qui aura pour valeur : Dubois.
    2. Afficher le message "Bonjour Pierre Dubois" à l'aide de ces variables.
*/

$firstname = "Pierre";
$name = "Dubois";
echo 'Bonjour ' . $firstname . ' ' . $name . '.';

echo '<br>';

echo 3 + 5 . '<br>';

$a = 7 / 4 . '<br>';
echo $a . '<br>';

$a = 3**2;
echo $a . '<br>';

/*
1. Afficher le résultat de la multiplication de 8 par 7.
2. Afficher le reste de la division entière de 9 par 4 en utilisant une variable.
*/

echo 8*7 . '<br>';

$a = 9 % 4;
echo $a. '<br>';

?>