<?php

# Exercice 6 : Premiere occurence tableau

echo ("=======DEBUT EXO 6=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$valeurElementCherche = intval(readline("Veuillez saisir la valeur de l'élément que vous cherchez dans le tableau : "));
$nombreOccurences = 0;

for ($i=0; $i < count($tab); $i++) { 
    if ($tab[$i] === $valeurElementCherche) {
        $nombreOccurences++;
        if ($nombreOccurences === 1) {
            # code...
            echo("L'élement " . $valeurElementCherche . " se trouve pour la première fois dans le tableau à la position " . $i . " du tableau" . PHP_EOL);
        }
    }
}


echo (PHP_EOL);

echo ("=======FIN EXO 6=======");

























?>