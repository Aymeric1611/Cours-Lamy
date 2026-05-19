<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$prixMax = readline("saisir le prix maximal des prix abordable : ");
$produitsAbordables = getProduitsAbordables($prixMax);

print_r($produitsAbordables);
