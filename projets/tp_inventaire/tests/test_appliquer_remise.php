<?php
require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n[RUN] test : appliquerRemise \n";

$resultat = appliquerRemise($inventaire, 0.90);
// j'ai pas fini le test
print_r($resultat);
if ($resultat['prix_unitaire'] == 25){
    echo "SUCCES !";
} else {
    echo "ECHEC !";
}
?>