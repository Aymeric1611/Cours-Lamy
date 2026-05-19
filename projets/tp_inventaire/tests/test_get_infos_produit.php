<?php
require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n[RUN] test : getInfosProduit \n";

$resultat = getInfosProduit($inventaire,1);

if ($resultat['id'] === 1 and $produit != null){
    echo "succes";
} else {
    echo "erreur";
}


$resultat = getInfosProduit($inventaire,10);

if ($produit === null){
    echo "succes";
} else {
    echo "erreur";
    print_r($produit);
}
?>