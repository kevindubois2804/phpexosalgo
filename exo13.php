<?php

['suppresionElementTableau' => $fonctionSuppresionElementTableau] = require 'functions.php';
# Exercice 13 : Tri ordre croissant tableau

echo ("=======DEBUT EXO 13=======");

echo (PHP_EOL);

$tab = [7, 3, 2, 5];
$originalSizeOfTab = count($tab);
$sizeOfTab = count($tab);
$remplissageNewTab = 0;
$newTab = [];
$positionDuMinimumTrouve = 0;
$minimum =min($tab);



while (!empty($tab)) {
    for ($i=0; $i < $sizeOfTab; $i++) {
        if ($tab[$i] <= $minimum) {
            $positionDuMinimumTrouve = $i;
            $minimum = $tab[$i];
            $newTab[$remplissageNewTab] = $minimum;
            $remplissageNewTab++;
            $tab = $fonctionSuppresionElementTableau($tab, $positionDuMinimumTrouve);
            if (!empty($tab)) {
                $sizeOfTab = count($tab);
                $minimum = min($tab);
                $i=0;
            }
            }
    }

}

print_r($newTab);


echo (PHP_EOL);

echo ("=======FIN EXO 13=======");

























?>