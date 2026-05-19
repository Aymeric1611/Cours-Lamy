<?php

require_once __DIR__ . "/repositories/etudiants_repository.php";
$id = readline("saisir un id etudiant : ");
$etudiant = getEtudiantById($id);
print_r($etudiant);


$nomRecherche = readline("saisir un nom a rechercher : ");