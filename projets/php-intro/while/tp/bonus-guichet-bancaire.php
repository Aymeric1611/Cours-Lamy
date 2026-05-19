<?php
$solde = 1000;
$nom = readline("saisir votre nom : ");
$code = readline("quel est votre code secret à 4 chiffre : ");
echo "Bienvenue $nom, votre session est ouverte.\n";

echo "====== MENU BANCAIRE =====\n
1 - Consulter le solde\n
2 - Déposer de l'argent\n
3 - Retier de l'argent\n
4 - Quitter\n
=========================\n";
$choix = readline("quel est votre choix : ");
echo "votre choix : $choix";

while ($choix != 4){
    echo "====== MENU BANCAIRE =====\n
    1 - Consulter le solde\n
    2 - Déposer de l'argent\n
    3 - Retier de l'argent\n
    4 - Quitter\n
    =========================\n";
    $choix = readline("quel est votre choix : ");
    echo "votre choix : $choix";
if ($choix == 1){
    echo "Votre solde actuel est de $solde €";
} elseif ($choix == 2){
    $montantDepot = readline("quel est le montant à déposer");
    if ($montantDepot > 0){
        $solde += $montantDepot;
    } else {
        echo "erreur";
    }
} elseif ($choix == 3){
    
}
}
?>