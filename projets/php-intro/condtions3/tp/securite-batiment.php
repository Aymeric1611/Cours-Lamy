<?php
$employer = readline("etes vous un employé (oui/non) : ");
$employer = strtolower(trim($employer));
$badge = readline("votre badge est actif (oui/non) : ");
$badge = strtolower(trim($badge));
$visiteur = readline("etes vous un visiteur (oui/non) : ");
$visiteur = strtolower(trim($visiteur));
$rdvAuj = readline("aviez vous rdv aujourd'hui (oui/non) : ");
$rdvAuj = strtolower(trim($rdvAuj));
$enregistrer = readline("etes vous enregistrer (oui/non) : ");
$enregistrer = strtolower(trim($enregistrer));

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