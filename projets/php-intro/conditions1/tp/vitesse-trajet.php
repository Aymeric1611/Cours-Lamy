<?php

$distance = readline("saisir la distance du trajet(en km) : ");
$duree = readline("saisir la durée du trajet (hh:mn) : ");
$dureeHeure = substr($duree,0,2);
$dureeMinute = substr($duree,3,2);

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$vitesse = round($distance/($dureeHeure + ($dureeMinute / 60)));

if ($dureeMinute < 59){

    echo "La vitesse moyenne du trajet est de $vitesse km/h \n";

    if ($vitesse < 90){

        echo $fondVert."Vous êtes en dessous des 90 km/h\n".$normal;

    } else {

        echo $fondRouge."Vous êtes au dessus des 90 km/h\n".$normal;
    }
} else {

    echo $texteRouge."ERREUR : la duree $duree est invalide\n.$normal";
}
?>