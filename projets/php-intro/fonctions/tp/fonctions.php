<?php

function estPair(int $nombre):bool{
    return $nombre % 2 == 0;
}

function getIdentite(string $prenom, string $nom):string{
    return ucfirst(trim(strtolower($prenom))) ." ". strtoupper(trim($nom));
}










?>