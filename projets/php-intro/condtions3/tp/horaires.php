<?php
$horaire = readline("saisir une heure (h:mm) : ");
$positionDeuxpoints = strpos($horaire, ":");
$heure = substr($horaire, 0, $positionDeuxpoints);

if (($heure >= 9 && $heure < 12) || ($heure >= 14 && $heure < 19)) {
    echo "le magasin est ouvert";
    
} else {
    echo "le magasin est fermé";
}
?>