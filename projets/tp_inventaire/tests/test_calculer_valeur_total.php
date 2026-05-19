<?php
require_once __DIR__ . '/../data/inventaire.php';
require_once __DIR__ . '/../lib/fonctions.php';

echo "\n[RUN] test : calculerValeurToral \n";

$resultat = calculerValeurTotale($inventaire);
if ($resultat == 5290){
    echo "succes";
} else {
    echo "erreur";
}
?>