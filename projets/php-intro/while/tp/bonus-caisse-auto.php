<?php
echo "Bienvenue à la caisse automatique !\n";
$nom = readline("quel est votre nom ? : ");
echo "Bonjour $nom, commençons vos achats.\n";
$article = trim(strtolower(readline("saisir le nom de l'article (ou 'fin' pour terminer) : ")));
$prixTotal = 0;

while ($article != "fin"){
    $prixUnitaire = readline("saisir son prix unitaire(€) : ");
    $quantite = readline("saisir une quantité : ");
    $sousTotal = $prixUnitaire * $quantite;
    echo "Le total pour $quantite $article à $prixUnitaire € est de $sousTotal €.\n";
    $prixTotal += $sousTotal;
    $article = trim(strtolower(readline("saisir le nom de l'article (ou 'fin' pour terminer) : ")));
}
if ($prixTotal >= 100){
    $prixSansReduc = $prixTotal;
    $prixTotal *= 0.9; 
    echo "une remise de 10% a été appliqué.\nTotal des achats avec réduction de 10% : $prixTotal et sans réduction $prixSansReduc €\n";
} elseif ($prixTotal >= 50){
    $prixSansReduc = $prixTotal;
    $prixTotal *= 0.95;
    echo "une remise de 5% a été appliqué.\nTotal des achats avec réduction de 5% : $prixTotal et sans réduction $prixSansReduc €\n";
} else{
    echo "Aucune réduction appliquée.\n";
}
echo "Merci $nom pour vos achats. Le montant a payer est de $prixTotal";
?>