<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$nombreProduitsParCategorie = getNombreProduitsParCategorie();
print_r($nombreProduitsParCategorie);