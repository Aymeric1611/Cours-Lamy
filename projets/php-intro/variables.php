<?php
//Déclaration d'une variable permettant de stocker un prénom
$age = 19;
/*$prenom = "Aymeric";
echo $prenom;
echo PHP_EOL;   */
$prenom = "Coco";
/*  echo $prenom;
echo PHP_EOL;
echo "Bonjour je m'appelle ".$prenom;
echo PHP_EOL;
$bonjourPrenom = "Bonjour je m'appelle ".$prenom;
echo $bonjourPrenom;
echo PHP_EOL;
echo 'Bonjour je m\'appelle '.$prenom;
echo PHP_EOL;
echo "Bonjour je m'appelle $prenom";
echo PHP_EOL;
echo "Bonjour $prenom";
echo PHP_EOL;
echo 'Bonjour $prenom'; // pas d'interpolation
echo PHP_EOL;  */
echo "Bonjour, je suis $prenom et j'ai $age ans.";
echo PHP_EOL;
echo "Bonjour, je suis ".$prenom. " et j'ai ".$age." ans.";
echo PHP_EOL;

$nom = "Joblin";
// afficher le nom en majuscule
$nomMaj = strtoupper($nom);
echo $nomMaj;
echo PHP_EOL;

echo PHP_EOL;
?>