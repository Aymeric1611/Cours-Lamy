<?php
echo ("CALCULATEUR D'ASSURANCE AUTOMOBILE");

$age = readline("quel est âge a le conducteur(17-99) : ");

$nbAnneePermis = readline("nombre d'années de permis(0-80) : ");

$nbAccident = readline("nombre d'accidents responsable(0-10) : ");

echo "type de véhicule :\n 
 1 - Citadine (< 90cv)\n
 2 - Berline (90-150cv)\n
 3 - SUV (150-250cv)\n
 4 - Sportive (> 250cv)\n";

$typeVehicule = readline("votre choix(1-4) : ");

echo "Zone géographique :\n
• A : Grande ville (> 200 000 hab)\n
• B : Ville moyenne (50 000 - 200 000 hab)\n
• C : Petite ville (10 000 - 50 000 hab)\n
• D : Zone rurale (< 10 000 hab)\n";

$zoneGeo = readline("votre choix(A-D) : ");

$kilometrage = readline("quel est votre Kilométrage annuel prévu (en km) : ");

$garage = readline("votre voiture est dans un garage ? Oui(O) Non(N) : ");

$bonus = readline("quel esr votre bonus/malus (0.50 à 3.50) : ");

if ($age >= 18 and $age < 100){
} else {
    echo "erreur pas le bon age\n";
}

if ($nbAnneePermis >=0 and $nbAnneePermis < 81){
} else {
    echo "erreur ";
}
?>