<?php
$contacts = ["bob" => "0612528250", "titi" => "60486464", "toto" => "0846465"];
$nom = readline("saisir le nom d'un contact : ");
$nom = strtolower($nom);

$trouver = false;
foreach ($contacts as $contat => $numTel){
    if ($contat == $nom){
        echo "le numero de $nom est $numTel";
        $trouver = true;
        break;
    }
}
if (!$trouver){
    echo "le contact $nom n'est pas present";
}
?>