<?php

# Exercice 9 : Ajout élément tableau

echo ("=======DEBUT EXO 9=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$insereValeur = intval(readline("Ecrivez la valeur que vous souhaitez ajouter à la fin du tableau : "));
$positionNouvelElementAjoute = count($tab);

$tab[$positionNouvelElementAjoute] = $insereValeur;

print_r($tab);


echo (PHP_EOL);

echo ("=======FIN EXO 9=======");

























?>