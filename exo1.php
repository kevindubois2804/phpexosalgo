<?php

# Exercice 1 : Calcul Somme

echo ("=======DEBUT EXO 1=======");

echo (PHP_EOL);

$tab = [];
$somme = 0;

for ($i=0; $i < 4; $i++) { 
    $tab[$i] = intval(readline("Ecrivez votre " . $i . " eme nombre : "));
}

for ($j=0; $j < count($tab); $j++) { 
    $somme += $tab[$j];
}

echo (PHP_EOL);

echo $somme;

echo (PHP_EOL);

echo ("=======FIN EXO 1=======");

echo (PHP_EOL);

?>