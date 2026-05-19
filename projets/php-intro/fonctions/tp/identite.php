<?php
require_once 'fonctons.php';

$prenom = readline("saisir votre prénom : ");
$nom = readline("saisir votre nom : ");

echo "Votre identite est " . getIdentite($prenom,$nom);

?>