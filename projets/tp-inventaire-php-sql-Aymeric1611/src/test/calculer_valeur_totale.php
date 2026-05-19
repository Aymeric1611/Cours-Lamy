<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$valTotalStock = calculerValeurTotale();
echo "la valeur du stock total est de " . $valTotalStock . " €";