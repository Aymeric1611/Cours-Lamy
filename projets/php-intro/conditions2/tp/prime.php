<?php
$cA = readline("saisir le chiffre d'affaire realisé : ");
$objectifCA = readline("saisir l'objectid de chiffre d'affaire : ");
$prime = 0;
if ($cA < 10000){
    echo "pas de prime\n";
} elseif ($cA < 20000){
    $prime = $cA * 0.05;
} elseif ($cA < 50000){
    $prime = $cA * 0.08;
} else {
    $prime = ($cA * 0.1) + 500;
}
if (($objectifCA * 1.2) < $cA){
    $prime = $cA * 0.02;
}
echo "le montant de la prime est de $prime €"
?>