<?php

# Exercice 5 : Toutes occurences tableau

echo ("=======DEBUT EXO 5=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$valeurElementCherche = intval(readline("Veuillez saisir la valeur de l'élément que vous cherchez dans le tableau : "));


for ($i=0; $i < count($tab); $i++) { 
    if ($tab[$i] === $valeurElementCherche) {
        echo("L'élement " . $valeurElementCherche . " se trouve à la position " . $i . " du tableau" . PHP_EOL);
    }
}


echo (PHP_EOL);

echo ("=======FIN EXO 5=======");

























?>