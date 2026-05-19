<?php
$prenom = readline("Saisir votre prenom : ");
$nom = readline("Saisir votre nom : ");
$mail = $prenom .".". $nom . "@societe.com";
echo "Votre adresse email est " . $mail;
?>