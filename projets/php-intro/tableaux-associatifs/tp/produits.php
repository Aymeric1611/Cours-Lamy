<?php
$produits = [
    "lait" => 0.5,
    "bonbon" => 1,
    "fraise" => 4,
];

$prixTotaux = 0;
foreach ($produits as $prix){
    $prixTotaux += $prix;
}
echo $prixTotaux;
?>