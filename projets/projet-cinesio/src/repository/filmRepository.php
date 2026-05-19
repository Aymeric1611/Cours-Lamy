<?php
require_once __DIR__ . "/../database/connection.php";

function findAllFilms():array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT film.id, titre, date_sortie, duree, synopsis, film.image, genre.nom AS genre, pays.nom, initiale FROM film, pays, genre WHERE film.id_genre = genre.id AND film.id_pays = pays.id";
    $requete = $connexion ->prepare($requeteSQL);
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $films = $requete -> fetchAll();
    return $films;
}

function findAllGenres():array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT * FROM genre";
    $requete = $connexion ->prepare($requeteSQL);   
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $genres = $requete -> fetchAll();
    return $genres;
}

function findAllPays():array{
    $connexion = getConnexion();

    $requeteSQL = "SELECT * FROM pays";
    $requete = $connexion ->prepare($requeteSQL);   
    $requete -> execute();

    $requete -> setFetchMode(PDO::FETCH_ASSOC);
    $pays = $requete -> fetchAll();
    return $pays;
}

function insertFilm(array $filmData): bool {
    $connexion = getConnexion();

    $requeteSQL = "INSERT INTO film (titre, date_sortie, duree, synopsis, image, id_genre, id_pays)
                    VALUES (:titre, :date_sortie, :duree, :synopsis, :image, :id_genre, :id_pays)";
    $requete = $connexion->prepare($requeteSQL);
    $requete->bindValue(':titre', $filmData['titre']);
    $requete->bindValue(':date_sortie', $filmData['date_sortie']);
    $requete->bindValue(':duree', (int)$filmData['duree']);
    $requete->bindValue(':synopsis', $filmData['synopsis']);
    $requete->bindValue(':image', $filmData['affiche']);
    $requete->bindValue(':id_genre', (int)$filmData['genre']);
    $requete->bindValue(':id_pays', (int)$filmData['pays']);
    return $requete->execute();
}