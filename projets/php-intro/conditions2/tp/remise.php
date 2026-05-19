<?php
$prix = readline("saisir un prix de l'article : ");

if ($prix < 1000){

    $prixRemise = round($prix * 0.95 , 2);
    $remise = $prix - $prixRemise;
    
    echo "la remise est de 5% soit $remise euros sur le prix de l'article\n";
    echo "Le montant de l'article apres la remise est de $prixRemise euros";

} elseif ($prix < 5000){

    $prixRemise = round($prix * 0.9 , 2);
    $remise = $prix - $prixRemise;

    echo "la remise est de 10% soit $remise euros sur le prix de l'article\n";
    echo "Le montant de l'article apres la remise est de $prixRemise euros";

} else {

    $prixRemise = round($prix * 0.8 , 2);
    $remise = $prix - $prixRemise;

    echo "la remise est de 20% soit $remise euros sur le prix de l'article\n";
    echo "Le montant de l'article apres la remise est de $prixRemise euros";
}
?>