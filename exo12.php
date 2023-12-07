<?php

# Exercice 12 : Suppression element tableau

echo ("=======DEBUT EXO 12=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$newTab = [];
$sizeOfNewTab = count($tab) - 1;
$positionDeElementDuTableauASupprimer = intval(readline("A quelle position souhaitez-vous supprimer l'élément ? : "));

for ($i=0; $i < $positionDeElementDuTableauASupprimer; $i++) { 
    # code...
    $newTab[$i] = $tab[$i];
}

for ($i=$positionDeElementDuTableauASupprimer; $i < $sizeOfNewTab ; $i++) { 
    # code...
    $newTab[$i] = $tab[$i+1];
}

print_r($newTab);

echo (PHP_EOL);

echo ("=======FIN EXO 12=======");

























?>