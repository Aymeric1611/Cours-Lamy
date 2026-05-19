<?php
$age = readline("saisir votre age : ");
$etudiant = readline("etes vous etudiant (oui/non) : ");
$etudiant = strtolower(trim($etudiant));

if ($age < 12){
    echo "entrée gratuite";

} elseif (($age <= 12 and $age < 18) or $etudiant == "oui"){
    echo "le tarif est reduit";

} else{
    echo "tarif plein";
}
?>