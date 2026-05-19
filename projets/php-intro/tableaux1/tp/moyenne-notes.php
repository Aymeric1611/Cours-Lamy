<?php
$t = [10, 12.5, 14, 7, 15, 9.5, 8];
$noteFinale = 0;

foreach ($t as $note){
    $noteFinale += $note;
}

if (!empty($t) > 0){
    $noteFinale = round($noteFinale / count($t),2);
} else {
    echo "on peut pas faire la moyenne sans aucune note";
}



if ($noteFinale < 10){
    echo "Votre moyenne à l'examen est de $noteFinale, vous n'avez pas votre diplôme";
} elseif ($noteFinale >= 10 and $noteFinale < 12){
    echo "Votre moyenne à l'examen est de $noteFinale, vous avez votre diplôme Mention passable";
} elseif ($noteFinale >= 12 and $noteFinale < 14){
    echo "Votre moyenne à l'examen est de $noteFinale, vous avez votre diplôme Mention assez bien";
} elseif ($noteFinale >= 14 and $noteFinale <16){
    echo "Votre moyenne à l'examen est de $noteFinale, vous avez votre diplôme Mention bien";
} else {
    echo "Votre moyenne à l'examen est de $noteFinale, vous avez votre diplôme Mention très bien";
}
?>