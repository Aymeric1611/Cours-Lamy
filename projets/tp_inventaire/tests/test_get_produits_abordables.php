<?php

require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n[RUN] test : getPorduitsAdordables \n";

$resultat = getProduitsAbordables($inventaire, 60);
if (count($resultat) === 2){
    echo "SUCCES !";
    print_r($resultat);
} else {
    echo "ECHEC !";
}
?>