<?php

function calculerMoyenne(array $tabNotes): float {
    $somme = 0;
    foreach ($tabNotes as $note){
        $somme += $note;
    }
    return round($somme / count($tabNotes), 2);
}

// Fonction qui renvoie les note supérieur à la moyenne >= 10
// notion de filtrage de donnée
function getNotesSupMoyenne(array $tabNotes):array{
    $tab = [];
    foreach ($tabNotes as $note){
        if ($note >= 10){
            $tab[] = $note;
        }
    }
    return $tab;
}
?>