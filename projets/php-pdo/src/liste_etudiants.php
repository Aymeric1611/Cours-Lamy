<?php
require_once __DIR__  . "/config/database.php";
require_once __DIR__ . "/db/connexion.php";
$connexion = getConnexion();

// test de la fonction permettant de recuperer la liste des etudiants
require_once __DIR__ . "/repositories/etudiants_repository.php";

$etudiants = getEtudiants();
print_r($etudiants);
