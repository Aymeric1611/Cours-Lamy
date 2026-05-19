<?php
$paniers = [
    ["pomme", "banane", "kiwi"],
    ["poire", "pomme"],
    ["banane", "abricot", "pomme"],
    []
];

$i = 1;
$nbPomme = 0;
foreach ($paniers as $panier) {
    echo  "le panier n°$i : ";
    if (count($panier) == 0){
        echo "Le panier est vide";
    }
    foreach ($panier as $poduit) {
        echo "$produit ";
        if ($produit == "pomme"){
            $nbPomme++;
        }
    }
    echo "\n";
    $i ++;
}
echo "nombre de pomme : $nbPomme";
?>