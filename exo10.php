<?php

# Exercice 10 : Modification element tableau

echo ("=======DEBUT EXO 10=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 7];
$positionDeElementDuTableauAModifier = intval(readline("Quelle est la position de l'élément que vous souhaitez modifier ? : "));

$nouvelleValeur = intval(readline("Ecrivez la nouvelle valeur de l'element : "));

for ($i=0; $i < count($tab); $i++) { 
    # code...
    if ($i === $positionDeElementDuTableauAModifier) {
        $tab[$i] = $nouvelleValeur;
    }
}

print_r($tab);

echo (PHP_EOL);

echo ("=======FIN EXO 10=======");

























?>