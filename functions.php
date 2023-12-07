<?php

return [
    
    'suppresionElementTableau' => function(array $tab, int $positionDeElementDuTableauASupprimer): array {
        $newTab = [];
        $sizeOfNewTab = count($tab) - 1;
        for ($i=0; $i < $positionDeElementDuTableauASupprimer; $i++) { 
            # code...
            $newTab[$i] = $tab[$i];
        }
        for ($i=$positionDeElementDuTableauASupprimer; $i < $sizeOfNewTab ; $i++) { 
            # code...
            $newTab[$i] = $tab[$i+1];
        }
        return $newTab;
    }

];
?>