<?php
echo "<h1>Opérateur logique</h1>";
echo "<h2>ET et OU</h2>";

$heure = 11;

if ($heure < 8 || $heure >= 20 ) {
    echo 'Nous sommes fermés.'. '<br>';
} else if ($heure < 18) {
    echo 'Bonjour.'. '<br>';
} else {
    echo 'Bonsoir.'. '<br>';
};

/*
    1. En reprenant le principe de l'exercice précédent faite un code qui affiche :
    -  "Trop cher" si le prix est supérieur au budget.
    - "Prix correct" entre le montant du budget et la moitié de ce dernier.
    - "Pas cher !" en dessous de la moitié du budget.
*/

$articlePrice = 50;
$maxAmount = 80;

if ($articlePrice > $maxAmount) {
    echo 'Trop cher !'. '<br>';
} else if ($articlePrice >= $maxAmount / 2 && $articlePrice <= $maxAmount) {
    echo 'Prix correct.'. '<br>';
} else {
    echo 'Pas cher.'. '<br>';
};

?>