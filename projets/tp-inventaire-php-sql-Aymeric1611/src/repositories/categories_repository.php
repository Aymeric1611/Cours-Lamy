<?php
require_once __DIR__ ."/../database/connexion.php";

function getNomCategorie(int $idCat): ?string{
    $connexion = getConnexion();

    $requeteSQL = "SELECT nom_categorie FROM categories WHERE id_categorie = $idCat";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $nomCategorie = $requete -> fetchColumn();
    if (empty($nomCategorie)){
        return null;
    } else {
        return $nomCategorie;
    }
}