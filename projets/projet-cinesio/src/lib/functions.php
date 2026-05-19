<?php

function transformerEnHeureMin($duree){
    $heure = intdiv($duree,60);
    $minute = $duree%60;
    if ($minute >= 10){
        return $heure ."h". $minute . "min";
    } elseif ($heure == 0){
        return $minute . "min";
    } else {
        return $heure ."h0". $minute . "min";
    }
    
}