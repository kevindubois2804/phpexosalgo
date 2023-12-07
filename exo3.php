<?php

# Exercice 3 : Calcul somme produit moyenne tableau

echo ("=======DEBUT EXO 3=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 12];
$somme = 0;
$produit = 1;
$moyenne = 0;

for ($i=0; $i < count($tab); $i++) { 
    $somme += $tab[$i];
    $produit *= $tab[$i];
}

$moyenne = $somme / count($tab);

echo("la somme est : " . $somme);
echo (PHP_EOL);
echo("le produit est : " . $produit);
echo (PHP_EOL);
echo("la moyenne est : " . $moyenne);

echo (PHP_EOL);

echo ("=======FIN EXO 3=======");

























?>