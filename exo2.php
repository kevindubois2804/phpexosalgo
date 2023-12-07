<?php

# Exercice 2 : Afficher N elements tableau

echo ("=======DEBUT EXO 2=======");

echo (PHP_EOL);

$tab = [];

$nombreElements = intval(readline("Veuillez entrer le nombre d'élements que vous souhaitez saisir dans le tableau : "));

for ($i=0; $i < $nombreElements; $i++) { 
    $tab[$i] = intval(readline("Ecrivez votre " . $i . " eme nombre : "));
}

echo (PHP_EOL);

print_r($tab);

echo (PHP_EOL);

echo ("=======FIN EXO 2=======");

echo (PHP_EOL);























?>