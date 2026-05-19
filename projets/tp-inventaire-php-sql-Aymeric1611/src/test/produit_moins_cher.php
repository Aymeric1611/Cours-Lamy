<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$produitMoinsCher = getProduitMoinsCher();
print_r($produitMoinsCher);