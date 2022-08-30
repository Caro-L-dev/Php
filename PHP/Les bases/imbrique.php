<?php
echo '<h2>Code imbriqué</h2> ';

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

foreach ($cars as $car ) {
    foreach ($car as $key => $value ) {
        echo $key . ' : ' . $value . ' - ';
    }
    echo ' <br>';
}

echo '<br>';
echo '---------------';
echo '<br> ';

// ===

$furnitures = [
    "souris" =>
    [
        "type" => "souris",
        "name" => "Souris sans fil noire",
        "brand" => "HP",
        "model" => "200",
        "price" => 11.99 
    ],
    [
        "type" => "souris",
        "name" => "Souris sans fil or / Noir cendré",
        "brand" => "HP",
        "model" => "Z5000",
        "price" => 26.43 
    ],
    "clavier" => 
    [
        "type" => "clavier",
        "name" => "Clavier sans Fil Multi-Dispositifs",
        "brand" => "Logitech",
        "model" => "K380",
        "price" => 44.99  
    ],
    [
        "type" => "clavier",
        "name" => "Clavier mécanique sans Fil RVB Compact",
        "brand" => "Redragon",
        "model" => "K530 Draconic",
        "price" => 69.99 
    ]
];

foreach ($furnitures as $furniture ) {
    foreach ($furniture as $key => $value ) {
        echo $key . ' : ' . $value . ' <br> ';
    }
    echo ' <br>';
}

// 3. Déclarer une variable $maxAmount à 45€ représentant le budget d'achat d'un accessoire PC.
$maxAmount = 45;


// 4. Adapter le code pour qu'il affiche l'ensemble des produits ne dépassant pas ce budget.


?>
