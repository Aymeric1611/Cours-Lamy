<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$inventaireDetaille = getInventaireDetaille();
print_r($inventaireDetaille);