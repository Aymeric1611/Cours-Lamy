<?php
require_once __DIR__ ."/../database/connexion.php";

function getProduitsAbordables(float $prixMax): array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT designation_produit FROM produits WHERE prix_unitaire_produit <= $prixMax";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $produitsAbordables = $requete -> fetchAll();
    return $produitsAbordables;
}

function calculerValeurTotale(): float{
    $connexion = getConnexion();

    $requeteSQL = "SELECT SUM(prix_unitaire_produit * quantite_produit) FROM produits";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $valTotalStock = $requete -> fetchColumn();
    return $valTotalStock;
}

function getInfosProduit(int $idCherche): ?array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT * FROM produits WHERE id_produit = $idCherche";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $infosProduit = $requete -> fetchAll();
    return $infosProduit;
}

function getProduitMoinsCher(): ?array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT * FROM produits ORDER BY prix_unitaire_produit LIMIT 1";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $produitMoinsCher = $requete -> fetchAll();
    return $produitMoinsCher; 
}

function getSimulationRemise(float $pourcentage): array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT *,($pourcentage * prix_unitaire_produit) AS prix_solde FROM produits";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $simulationRemise = $requete -> fetchAll();
    return $simulationRemise; 
}

function getInventaireDetaille(): array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT * FROM produits, categories WHERE categories.id_categorie = produits.id_categorie";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $inventaireDetaille = $requete -> fetchAll();
    return $inventaireDetaille;
}

function getNombreProduitsParCategorie(): array{
    $connexion = getConnexion();

    
    $requeteSQL = "SELECT COUNT(*) AS nom_categorie FROM produits, categories WHERE categories.id_categorie = produits.id_categorie GROUP BY produits.id_categorie LIMIT 100";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $nombreProduitsParCategorie = $requete -> fetchAll();
    return $nombreProduitsParCategorie;
}