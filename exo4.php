<?php

# Exercice 4 : Consulter element tableau

echo ("=======DEBUT EXO 4=======");

echo (PHP_EOL);

$tab = [4, 7, 8, 12];
$valeurElement = 0;

$elementConsulte = intval(readline("Quel element du tableau voulez vous consulter : "));

// for ($i=0; $i < count($tab); $i++) { 
//     if ($i === $elementConsulte) {
//         $valeurElement = $tab[$i];
//     }
// }

echo $tab[$elementConsulte];

// echo("L'élément consulté " . $elementConsulte . " a pour valeur : " . $valeurElement);

echo (PHP_EOL);

echo ("=======FIN EXO 4=======");

























?>