<?php

# Exercice 7 : Derniere occurence tableau

echo ("=======DEBUT EXO 7=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$valeurElementCherche = intval(readline("Veuillez saisir la valeur de l'élément que vous cherchez dans le tableau : "));
$dernierePoistionDeElementCherche = 0;

for ($i=0; $i < count($tab); $i++) { 
    if ($tab[$i] === $valeurElementCherche) {
        $dernierePoistionDeElementCherche = $i;
    }
}

echo("L'élement que vous cherchez se retrouve pour la derniere fois dans le tableau à la position " . $dernierePoistionDeElementCherche . " du tableau");
echo (PHP_EOL);

echo ("=======FIN EXO 7=======");

























?>