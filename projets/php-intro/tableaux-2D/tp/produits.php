<?php
$produits = [
    'P0001' => ['Designation' => "Produit 1", 'Prix' => 50.99, 'Stock' => 10],
    'P0002' => ['Designation' => "Produit 2", 'Prix' => 99.99, 'Stock' => 20],
    'P0003' => ['Designation' => "Produit 3", 'Prix' => 25.50, 'Stock' => 6],
    'P0004' => ['Designation' => "Produit 4", 'Prix' => 130.99, 'Stock' => 4]
];

//exo 1
foreach ($produits as $reference => $carateristique){
    echo "$reference $carateristique[Designation]\n";
}

//exo 2
$valeurStockTotal = 0;
foreach ($produits as $reference => $carateristique){
    $valeurStockTotal += ($carateristique['Stock'] * $carateristique['Prix']);
}
echo "La valeur du stock es de " . number_format($valeurStockTotal,2,","," ")."\n";

//exo 3
$produitsReappro = [];
foreach ($produits as $reference => $carateristique){
    if ($carateristique['Stock'] < 7){
        $produitsReappro[] = $reference;
    }
}
print_r($produitsReappro);

//exo 4
$ref = trim(readline("saisir une référence : "));
if (in_array($ref, $produitsReappro)){
    $quantiteReçue = readline("saisir une quantité reçue : ");
    $produits[$ref]['Stock'] += $quantiteReçue;
    echo "La quanité a bien été mise à jour !";
} else {
    echo "La référence n'existe pas !";
}
?>