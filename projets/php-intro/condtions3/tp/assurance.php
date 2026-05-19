<?php
$age = readline("saisir votre âge : ");
$sexe = readline("saisir votre sexe (M ou F) : ");
$hommePlus22ans = $sexe == "H" && $age > 22;
$femmeEntre20Et30Ans = $sexe == "F" && $age <= 30 && $age >= 20;

if ($hommePlus22ans || $femmeEntre20et30Ans){
    echo "oui vous devez payer une surprime";

} else {
    echo "nn vous devez payer une surprime";
}
?>