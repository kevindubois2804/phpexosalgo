<?php

# Exercice 11 : Ajout element tableau

echo ("=======DEBUT EXO 11=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$newTab = [];
$sizeOfNewTab = count($tab) + 1;
$positionDeElementDuTableauAModifier = intval(readline("A quelle position souhaitez-vous ajouter l'élément ? : "));
$positionDeElementQuiSuitElementAjoute = $positionDeElementDuTableauAModifier + 1;
$ajoutValeur = intval(readline("Ecrivez la valeur de l'element : "));

for ($i=0; $i < $positionDeElementDuTableauAModifier; $i++) { 
    # code...
    $newTab[$i] = $tab[$i];
}

$newTab[$positionDeElementDuTableauAModifier] = $ajoutValeur;

for ($i=$positionDeElementQuiSuitElementAjoute; $i < $sizeOfNewTab ; $i++) { 
    # code...
    $newTab[$i] = $tab[$i-1];
}

print_r($newTab);

echo (PHP_EOL);

echo ("=======FIN EXO 10=======");

























?>