<?php
require_once __DIR__ . "/../database/connection.php";

function findUtilisateurByEmail(string $email): array|false {
    $connexion = getConnexion();

    $requeteSQL = "SELECT email, pseudo, mot_de_passe FROM utilisateur WHERE email = :email";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> bindValue(':email', $email);
    $requete -> execute();
    return $requete -> fetch(PDO::FETCH_ASSOC);
}


function findUtilisateurByPseudo(string $pseudo): array|false {
    $connexion = getConnexion();

    $requeteSQL = "SELECT pseudo, email, mot_de_passe FROM utilisateur WHERE pseudo = :pseudo";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> bindValue(':pseudo', $pseudo);
    $requete -> execute();
    return $requete -> fetch(PDO::FETCH_ASSOC);
}



function createUtilisateur(array $data) {
    $connexion = getConnexion();

    $requeteSQL = "INSERT INTO utilisateur (pseudo, email, mot_de_passe)
                    VALUES (:pseudo, :email, :mot_de_passe)";
    $requete = $connexion -> prepare($requeteSQL);
    $requete -> bindValue(':pseudo', $data['pseudo']);
    $requete -> bindValue(':email', $data['email']);
    $requete -> bindValue(':mot_de_passe', password_hash($data['mot_de_passe'], PASSWORD_DEFAULT));
    return $requete -> execute();
}

?>