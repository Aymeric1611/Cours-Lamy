<?php
$age = readline("saisir votre age : ");
$bac = readline("avez vous le bac (oui/non) : ");
$anneeExp = readline("combien d'année d'experience pro : ");
$bac = strtolower(trim($bac));

if ($age >= 18 and ($bac == "oui" or $anneeExp >= 2)){
    echo "admis en formation";
    
} else {
    echo "nn admis en formation";
}
?>