<?php
$prenom = readline("Saisir votre prenom : ");
$nom = readline("Saisir votre nom : ");
$initial = substr($prenom,0,1) . substr($nom,0,1);
echo "vos initials sont : " . strtoupper($initial);
?>
