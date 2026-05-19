<?php
$montant = readline("Saisir un montant à emprunter : ");
$taux = readline("Saisir un taux d'intérêt annuel (%) : ");
$duree = readline("Saisir une durée (en année) : ");
$mensualiteARembourser = ( $montant * ( ( $taux / 100 ) / 12 ) ) / (1 - ( 1 / ( 1 + ( ( $taux / 100 ) / 12 ) ) ** ( 12 * $duree ) )) ;
echo "La mensualité à rembourser est de ". round($mensualiteARembourser, 2) . " euros !";
echo "Le coût totale de l'emprunt est de " . floor(($mensualiteARembourser * $duree * 12) - $montant) . " euros !";
?>