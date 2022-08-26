<?php
echo '<h1>Fonction</h1>';

$string = '<h1 style="font-size: 500px">Hello World</h1>';
echo strtoupper($string) . '<br>';

echo '<br>';
echo '------------';
echo '<br> ';

echo mb_strtoupper($string) . '</br>';

echo '<br>';
echo '------------';
echo '<br> ';

echo htmlspecialchars($string);

echo '<br>';
echo '------------';
echo '<br> ';

echo strlen($string) . '<br>';

echo '<br>';
echo '------------';
echo '<br> ';

echo mb_strlen($string) . '</br>';

echo '<br>';
echo '------------';
echo '<br> ';

$string = 'Récupérer la valeur de retour d\'une fonction';

$words = explode(' ', $string);

var_dump($words);

echo '<br>';
echo '------------';
echo '<br> ';

sort ($words);
var_dump($words);

echo '<br>';
echo '<br> ';

echo '<h2>Exercice 01</h2>';

/*
    A partir des fonctions présentées :
    1. Créer un code qui va ranger par ordre alphabétique une liste de mots (sous forme de tableau) :
    ['bois', 'plastique', 'aluminium', 'or', 'métal']
*/

$material = ['bois', 'plastique', 'aluminium', 'or', 'métal'];

sort($material);
var_dump($material);

echo '<br>';
echo '<br> ';

echo '<h2>Exercice 02</h2>';

/*
    2. Créer un code qui range par ordre alphabétique les mots d'une chaîne de caractères comme celle-ci :
    'souris;clavier;tablette;moniteur;pc portable'.
*/

$device = 'souris;clavier;tablette;moniteur;pc portable';

$deviceAlphabetical = explode(';', $device);
sort($deviceAlphabetical);
var_dump($deviceAlphabetical);

echo '<br>';
echo '<br> ';

echo '<h2>Exercice 03</h2>';

/*
        3. Créer un code qui va donner le plus petit mot de la liste de mots :
        [herbe, champ, ville, immeubles, écrire, livres].
*/

$words = ['herbe', 'champ', 'ville', 'immeubles', 'écrire', 'livres', 'et'];
$littlesWord = $words[0];

foreach ($words as $word) {
    if(mb_strlen($word) < mb_strlen($littlesWord));
    $littlesWord = $word;
};

echo $littlesWord;

echo '<br>';
echo '<br> ';

echo '<h1>Création de fonction</h1>';

function getTotalPrice(float $unitPrice, int $quantity):  float 
{
    return $unitPrice * $quantity;
}

echo getTotalPrice(19.90, 5);

echo '<br>';
echo '<br> ';

echo '<h2>Exercice 04</h2>';

/*
    1. Ecrire une fonction qui donne le mot le plus petit d'une liste de mots.
    Liste pour vérifications : hache, légume, soupes, araignée.
*/

function getListedWord (array $words): string 
{
    $littlesWord = $words[0];

    foreach ($words as $word) {
        if (mb_strlen($word) < mb_strlen($littlesWord)) {
            $littlesWord = $word;
        }
    }
    return $littlesWord;
}

$words = ['hache', 'légume', 'soupes', 'araignée'];
echo getListedWord($words);

echo '<br>';
echo '<br> ';


echo '<h2>Exercice 05</h2>';

/*
    Ecrire une fonction qui permet de vérifier le nombre le plus petit de deux listes.
    Pour vérifications :
    - [43, 87, 42, 53, 18, 12, 88]
    - [86, 12, 78, 63, 13, 88, 121] 
*/

function getMinNumber(array $list1, array $list2): int 
{
    $list = array_merge($list1, $list2);

    return min($list);
};

function getMinNumber2(array $list1, array $list2): int 
{
    $min1 = min($list1);
    $min2 = min($list2);

    return min($min1, $min2);
};

function getMinNumber3(array $list1, array $list2): int 
{
    return min ($list1, $list2);
}

/*
    3. Ecrire une fonction qui donne le plus petit mot d'une série de deux liste de mots.
    Pour vérifications :
    - ['hache', 'légume', 'soupes', 'araignée']
    - ['herbe', 'champ', 'ville', 'immeubles', 'écrire', 'livres'].
*/

$words1 = ['hache', 'légume', 'soupes', 'araignée'];
$words2 = ['herbe', 'champ', 'ville', 'immeubles', 'écrire', 'livres'];

function getLittlesWord2(array $list1, array $list2) : string 
{
    $littlesWord1 = getLittlesWord2($list1);
    $littlesWord2 = getLittlesWord2($list2);

    return getLittlesWord2([$littlesWord1, $littlesWord2]);
}

echo getLittlesWord2($words1, $words2);

function getLittlesWord4(array $list1, array $list2) : string 
{
    $list = array_merge($list1, $list2);

    return getLittlesWord($list);
}

echo getLittlesWord4($words1, $words2);

?>