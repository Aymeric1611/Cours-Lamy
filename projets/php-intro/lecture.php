<?php
$prenom = readline("saisir votre prénom : ");
$nom = readline("saisir votre nom : ");
/*$nomMaj = strtoupper($nom);
$prenom1erLMaj = ucfirst($prenom);
echo "Bonjour $prenom1erLMaj $nomMaj";
*/
echo "Bonjour " . ucfirst($prenom) ." ". strtoupper($nom);
?>