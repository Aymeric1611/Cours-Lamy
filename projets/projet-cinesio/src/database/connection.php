<?php
require_once __DIR__ . "/../config/database.php";

//definir une fonction qui retourne une connexion avec le serveur de bdd
function getConnexion(): PDO{
    try {
        $dsn = "pgsql:host =" . DB_HOST . "; port =" . DB_PORT ."; dbname =" . DB_NAME;
        $connexion = new PDO($dsn,DB_USER,DB_PASSWORD);
        return $connexion;
    } catch(PDOException $erreur) {
        // afficher un message d'erreur et mettre fin au script
        echo "erreur " . $erreur -> getMessage();
        exit;
    }
}