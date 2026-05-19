<?php
require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n[RUN] test : getProduitMoinsCher \n";

$resultat = getProduitMoinsCher($inventaire);
print_r($resultat);
if ($resultat['prix_unitaire'] == 25){
    echo "SUCCES !";
} else {
    echo "ECHEC !";
}
?>