<?php

# Exercice 8 : Nombre occurences tableau

echo ("=======DEBUT EXO 8=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$valeurElementCherche = intval(readline("Veuillez saisir la valeur de l'élément que vous cherchez dans le tableau : "));
$nombreOccurences = 0;

for ($i=0; $i < count($tab); $i++) { 
    if ($tab[$i] === $valeurElementCherche) {
        $nombreOccurences++;
    }
}

echo("L'élement que vous cherchez apparait " . $nombreOccurences . " fois dans le tableau");


echo (PHP_EOL);

echo ("=======FIN EXO 8=======");

























?>