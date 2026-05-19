<?php
require_once __DIR__ . "/../repositories/produits_repository.php";

$pourcentage = readline("saisir un pourcentage de remise (de la forme, ex : 0.84) : ");
$simulationRemise = getSimulationRemise($pourcentage);
print_r($simulationRemise);