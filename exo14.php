<?php

['suppresionElementTableau' => $fonctionSuppresionElementTableau] = require 'functions.php';
# Exercice 14 : Tri ordre decroissant tableau

echo ("=======DEBUT EXO 14=======");

echo (PHP_EOL);

$tab = [7, 3, 2, 5];
$originalSizeOfTab = count($tab);
$sizeOfTab = count($tab);
$remplissageNewTab = 0;
$newTab = [];
$positionDuMaximumTrouve = 0;
$maximum =max($tab);



while (!empty($tab)) {
    for ($i=0; $i < $sizeOfTab; $i++) {
        if ($tab[$i] >= $maximum) {
            $positionDuMaximumTrouve = $i;
            $maximum = $tab[$i];
            $newTab[$remplissageNewTab] = $maximum;
            $remplissageNewTab++;
            $tab = $fonctionSuppresionElementTableau($tab, $positionDuMaximumTrouve);
            if (!empty($tab)) {
                $sizeOfTab = count($tab);
                $maximum = max($tab);
                $i=0;
            }
            }
    }

}

print_r($newTab);


echo (PHP_EOL);

echo ("=======FIN EXO 14=======");

























?>