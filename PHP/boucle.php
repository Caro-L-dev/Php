<?php
echo "<h1>Boucles</h1>";


echo "<h2>Boucle While</h2>";

$i = 0;

while ( $i < 10 ) {
    echo $i . ' ➡️ ';
    $i++;
}

// ===

echo "<h2>Boucle For</h2>";

echo '<br> ⭐ ';

for ( $i = 0; $i < 10; $i++) {
    echo $i . ' - ';
}

echo '<br>';
echo '------------';
echo '<br> 🚗 ';

$carBrands = [
    'Renault',
    'Citroen',
    'Peugeot',
    'Opel',
    'Audi',
    'BMW'
];

for ( $i = 0; $i < 6 ; $i++) { 
    echo $carBrands[$i]. ' - ';
}

echo '<br>';
echo '---------------';
echo '<br> 🚗 ';

$cars = [
    [
        'brand' => 'Citroen',
        'model' => 'C4',
        'year'  => 2018,
        'motor' => 'Diesel',
    ],
    [
        'brand' => 'Renault',
        'model' => 'Laguna',
        'year'  => 2009,
        'motor' => 'Diesel',
    ],
    [
        'brand' => 'Peugeot',
        'model' => '208',
        'year'  => 2019,
        'motor' => 'Diesel',
    ]
];

for ( $i= 0; $i < 3; $i++ ) { 
    echo $cars[$i]['brand'] . ' '. $cars[$i]['model'] . ' - ';
}

echo '<br>';
echo '---------------';
echo '<br>';

// ===

// 1. Créer une boucle pour afficher les nombres de 10 à 20 (par ordre croissant).
for ( $i = 10; $i <= 20; $i++) {
    echo $i . ' ➡️ ';
}

echo '<br>';
echo '---------------';
echo '<br>';

// 2. Créer une boucle pour afficher les nombres de 20 à 10 (par ordre décroissant).
for ( $i = 20; $i >= 10; $i--) {
    echo $i . ' ⬅️ ';
}

// ===

echo '<br>';
echo '---------------';
echo '<br> 🧍 ';

/*
    3. Déclarer une liste à partir des prénoms suivants :
    - Eric
    - Gilles
    - Leïla
    - Arthemis
    - Julie
    4. Créer une boucle qui affiche la liste des prénoms.
*/

$firstnames = [
    'Eric',
    'Gilles',
    'Leila',
    'Arthemis',
    'Julie'
];

for ( $i= 0; $i < 5; $i++ ) { 
    echo $firstnames[$i] . ' - ';
}

echo '<br>';

// ===

echo "<h2>Boucle For Each</h2>";

echo '<br> 🧑 ';
$firstnames = ["David", "Robert", "Jonathan"];

foreach($firstnames as $firstname) {
    echo $firstname . ' - ';
}

echo '<br>';
echo '---------------';
echo '<br> 🧑 ';

$person = [
    'firstname' => 'François',
    'name' => 'Dupont',
    'age' => 40
];

foreach ($person as $key => $value ) {
    echo $key . ' : ' . $value . ' | ';
}

echo '<br>';
echo '---------------';
echo '<br> 🧑 ';

// ===

/*
    1. Créer une boucle foreach qui affiche la liste des prénoms
    de la liste créer à la question sur les boucles for.
*/

$names = [
    'Eric',
    'Gilles',
    'Leila',
    'Arthemis',
    'Julie'
];

foreach ( $names as $name) { 
    echo $name . ' - ';
}

echo '<br>';
echo '---------------';
echo '<br> 🕺 ';

/*
    2. Créer une boucle foreach qui cherchera le nombre le plus petit
    de cette liste : 24, 85,22, 12, 78, 63.
*/

$numbers = [ 24, 85,22, 12, 78, 63 ];
$min = $numbers[0];

foreach ( $numbers as $number ) { 
    if ( $number < $min ) {
        $min = $number;
    }    
}

echo $min;

?>