<?php
$anciennete = readline("combien d'année d'ancienneté (en année) : ");
$noteEval = readline("votre note d'evalution (entre 0 et 5) : ");
$salaire = readline("quel est votre salaire : ");

if ($anciennete >= 5 and $noteEval >= 4){
    $salaire = $salaire * 1.1;
    echo "votre salaire sera de $salaire ";

} elseif ($anciennete >= 3 and $noteEval >= 3){
    $noteEval = $noteEval * 1.05;
    echo "votre salaire sera de $salaire";
    
} else {
    echo "pas de bonus";
}
?>