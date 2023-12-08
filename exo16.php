<?php

['suppresionElementTableau' => $fonctionSuppresionElementTableau] = require 'functions.php';
# Exercice 13 : Somme produit moyenne tableau 2D
echo ("=======DEBUT EXO 16=======");

echo (PHP_EOL);

$tab = [
    [1, 3, 2, 5],
    [6, 2, 7, 3]
];

$iMax = count($tab);
$jMax = count($tab[0]);

$somme = 0;
$produit = 1;

for ($i=0; $i < $iMax; $i++) { 
    for ($j=0; $j < $jMax; $j++) { 
        $somme += $tab[$i][$j];
        $produit *= $tab[$i][$j];
    }
}

$moyenne = $somme / ($iMax * $jMax);

echo $somme;


echo (PHP_EOL);

echo ("=======FIN EXO 16=======");