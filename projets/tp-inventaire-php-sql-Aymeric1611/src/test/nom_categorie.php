<?php
require_once __DIR__ . "/../repositories/categories_repository.php";

$idCat = readline("saisir un id de categorie a rechercher : ");
$nomCategorie = getNomCategorie($idCat);
echo($nomCategorie);