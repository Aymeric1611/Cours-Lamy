<?php
$nb1=readline("Saisir un nombre entier : ");
$nb2=readline("Saisir un nombre entier : ");
if ($nb2 != 0){
    $result= round($nb1/$nb2,2);
    echo "Le résultat de la division de $nb1 par $nb2 est $result";
} else {
    echo "impossible a diviser";
}
?>