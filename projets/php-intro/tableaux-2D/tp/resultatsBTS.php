<?php
$etudiants = [
    ['nom' => "Jul", 'moyenne' => 8],
    ['nom' => "Bob", 'moyenne' => 16],
    ['nom' => "Nathou", 'moyenne' => 13],
    ['nom' => "Aymeric", 'moyenne' => 20],
    ['nom' => "Patrick", 'moyenne' => 10]
];

$nomMajor = $etudiants[0]['nom'];
$moyenneMajor = $etudiants[0]['moyenne'];
for ($i = 0; $i < count($etudiants); $i++){
    $nom = $etudiants[$i]['nom'];
    $moyenne = $etudiants[$i]['moyenne'];
    if ($moyenne >= 10){
        echo "la moyenne de $nom est de $moyenne\n";
        if ($moyenneMajor < $moyenne){
            $nomMajor = $nom;
            $moyenneMajor = $moyenne;
        }
    }
}
echo "le major de promo est $nomMajor avec une moyenne de $moyenneMajor";
?>