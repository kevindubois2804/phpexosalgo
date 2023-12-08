<?php


# Exercice 15 : Fusionner deux tableaux 1D
echo ("=======DEBUT EXO 15=======");

echo (PHP_EOL);

$tab1 = [7, 3, 2, 5];
$tab2 = [1, 4, 8];
$sizeOfTab1 = count($tab1);
$sizeOfTab2 = count($tab2);
$newTab = [];
$sizeOfNewTab = $sizeOfTab1 + $sizeOfTab2;
$j=0;

for ($i=0; $i < $sizeOfTab1; $i++) { 
    $newTab[$i] = $tab1[$i];
}

for ($i=$sizeOfTab1; $i < $sizeOfNewTab; $i++) { 
    $newTab[$i]=$tab2[$j];
    $j++;
}

print_r($newTab);

echo (PHP_EOL);

echo ("=======FIN EXO 15=======");

























?>