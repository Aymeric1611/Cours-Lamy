<?php
function incrementer(int $nombre):int{
    $nombre += 1;
    return $nombre;
}

$compteur = 1;
$compteur = incrementer($compteur);
echo $compteur;

echo "\n";

function incrementer2(int& $nombre):void{
    $nombre += 1;
}

$compteur2 = 1;
incrementer2($compteur2);
echo $compteur2;
?>