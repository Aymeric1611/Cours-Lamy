<?php
$prixHP = readline("Saisir un prix HT : ");
$tauxTVA = readline("Saisir un taux de TVA (en %) : ");
$prixTTC = $prixHP * (1+($tauxTVA/100));
echo " Le prix TTC est de : ". round($prixTTC, 2);
?>