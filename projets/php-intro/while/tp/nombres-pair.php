<?php
$borneFin = readline("saisir un nombre : ");
$nombre = 1;
$somme = 0;
while ($nombre <= $borneFin){
    if ($nombre % 2 == 0){
        echo $nombre," ";
        $somme = $somme + $nombre;
        $nombre ++;
    } else {
        $nombre ++;
    }
}
echo "la somme des nombres pair dans l'intervale [0;$borneFin] est $somme";16
?>