<?php
echo "<h1>Structure de condition</h1>";
echo "<h2>If & Else if</h2>";

$heure = 10;

if ($heure < 18) {
    echo 'Bonjour.'. '<br>';
} else if ($heure < 20) {
    echo 'Bonsoir.'. '<br>';
} else {
    echo 'Nous sommes fermés.'. '<br>';
};

/*
    1.  Déclarer une variable $maxAmount à 100€ représentant le budget loisir d'un couple.
    2. Écrire un code affichant le message "Trop cher !" si le prix d'un article de loisir
    est supérieur à ce budget.
*/

$articlePrice = 50;
$maxAmount = 50;

if ($articlePrice > $maxAmount) {
    echo 'Trop cher !';
} else if ($articlePrice === $maxAmount) {
    echo 'Tout juste.';
} else {
    echo 'Bon prix.';
};
?>