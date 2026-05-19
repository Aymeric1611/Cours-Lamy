<?php
$boursier = readline("etes vous boursier ? (oui/non) : ");
$boursier = strtolower(trim($boursier));
$distance = readline("quel est votre distance (en km) : ");
$revenu = readline("quel sont vos revenus : ");
$situationMedic = readline("avez vous une situation médicale particulière (oui/non) : ");
$situationMedic = strtolower(trim($situationMedic));

$boursierHabiteAPlus30Km = $boursier == "oui" and $distance > 30;
$nonBoursierRevenuFaibleDistancePlus50km = $boursier == "non" and $revenu < 900 and $distance > 50;

if ($boursierHabiteAPlus30Km or $nonBoursierRevenuFaibleDistancePlus50km or $situationMedic == "oui"){
    echo "logement attribué";

} else {
    echo "logement refusé";
}
?>