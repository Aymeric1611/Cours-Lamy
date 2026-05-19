<?php
// liste de fonction qui vont envoyer des requetes de type SELECT vers la table etudiants
require_once __DIR__ ."/../db/connexion.php";
// recuperer la liste des etudiants
function getEtudiants(): array {
    //connexion a la bdd
    $connexion = getConnexion();

    // execution de la requete
    $requeteSQL = "SELECT  * FROM etudiants";
    $requete = $connexion ->prepare($requeteSQL);
    $requete -> execute();

    // recuperer les enregistrement
    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $etudiants = $requete -> fetchAll();
    return $etudiants;
}

// recuperer les info d'un etudiant connaissant son id
function getEtudiantById(int $id): ?array{
    //connexion a la bdd
    $connexion = getConnexion();

    //preparation de la requete
    $requeteSQL = "SELECT * FROM etudiants WHERE id_etudiant = :id";
    $requete = $connexion -> prepare($requeteSQL);
    //execution de la requete
    // 1.donner une valeur au parametre :id
    $requete -> bindValue("id",$id);
    // 2.executer la requete
    $requete -> execute();
    //recuperer les resultat
    $etudiant = $requete -> fetch(PDO::FETCH_ASSOC);
    if (!$etudiant){
        return null;
    } else {
        return $etudiant;
    }   
}

function getNbEtudiant():int{
    $connexion = getConnexion();

    // execution de la requete
    $requeteSQL = "SELECT  COUNT(*) FROM etudiants";
    $requete = $connexion ->prepare($requeteSQL);
    $requete -> execute();

    // recuperer les enregistrement
    $nbEtudiant = $requete -> fetch(PDO::FETCH_ASSOC);   
    return $nbEtudiant;
}

//recuperer l'id, le prenom et le nom de tous les etudiants portant un mm nom
function getEtudiantByNom(string $nomRecherche): array{
    $connexion = getConnexion();
    $nomRecherche = trim(ucfirst(strtolower($nomRecherche)));
    // execution de la requete
    $requeteSQL = "SELECT id_etudiant, prenom_etudiant, nom_etudiant FROM etudiants WHERE nom_etudiant = $nomRecherche";
    $requete = $connexion ->prepare($requeteSQL);
    $requete -> execute();
    $etudiant = $requete -> fetchAll(PDO::FETCH_ASSOC);
    return $etudiant;
}