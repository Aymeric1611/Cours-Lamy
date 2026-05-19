<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$id = readline("saisir l'id du produit a rechercher : ");
$produit = getInfosProduit($id);
print_r($produit);
