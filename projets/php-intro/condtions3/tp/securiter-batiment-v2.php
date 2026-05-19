<?php
$employer = strtolower(trim(readline("etes vous un employé (oui/non) : ")));
$badge = strtolower(trim(readline("votre badge est actif (oui/non) : ")));
$visiteur = strtolower(trim(readline("etes vous un visiteur (oui/non) : ")));
$rdvAuj = strtolower(trim(readline("aviez vous rdv aujourd'hui (oui/non) : ")));
$enregistrer = strtolower(trim(readline("etes vous enregistrer (oui/non) : ")));

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

$employerAvecBadgeActif = $employer == "oui" and $badge == "oui";
$visiteurAttenduAujEtEnregister = ($visiteur == "oui" and $rdvAuj == "oui") and $enregistrer == "oui";

if ($employerAvecBadgeActif or $visiteurAttenduAujEtEnregister){
    echo "accès autorisé";

} else {
    echo "accès non autorisé";
}
?>