<?php
// la logique métier

// mission 1
// extraire tous les noms des produits dont le prix est inférieur ou égale à un prix seuil

function getProduitsAbordables(array $tabInventaire, int $prixSeuil) : array{
    $nomProduits = [];
    // parcours du tableau
    foreach ($tabInventaire as $produit){
        if ($produit['prix_unitaire'] <= $prixSeuil ){
            // ajoute le nom du produit dans $nomProduit
            $nomProduits [] = $produit['designation'];
        }
    }
    return $nomProduits;
}


// mission 2
// calcule le prix total du stock dispo

function calculerValeurTotale(array $table): float{
    $valeurTotalDuStock = 0;
    foreach ($table as $produit){
        $valeurTotalDuStock += ($produit['prix_unitaire'] * $produit['quantite']);
    }
    return $valeurTotalDuStock;
}


// mission 3
// recherche si un produit est present dans l'inventaire

function getInfosProduit(array $table, int $idCherche): ?array{
    foreach ($table as $produit){
        if ($produit['id'] === $idCherche){
            return $produit;
        }
    }
    return null;
}


// mission 4
// recherche le produit le moins cher de l'incventaire

function getProduitMoinsCher(array $table): ?array{
    $prixPlusBas = $table[0]['prix_unitaire'];
    $produitMoinsCher = [];
    foreach($table as $produit){
        if ($prixPlusBas > $produit['prix_unitaire']){
            $prixPlusBas = $produit['prix_unitaire'];
            $produitMoinsCher = $produit;
        }
    }
    if (count($produitMoinsCher) != 0){
        return $produitMoinsCher;
    } else {
        return null;
    }
}


// mission 5
//
function  appliquerRemise(array $table, float $pourcentage): array{
    $inventaireSolde = $table;
    foreach ($table as $produit){
        $prixSolde = $produit['prix_unitaire'] * $pourcentage;
        $inventaireSolde [$produit]['prix_unitaire'] = $prixSolde;
    }
    return $inventaireSolde;
}

?>