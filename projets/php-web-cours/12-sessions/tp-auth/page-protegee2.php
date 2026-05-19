<?php
session_start();
if (!isset($_SESSION['utilisateur'])){
    header("Location: connexion.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace personnel</title>
</head>
<body>
    <h1>Espace personnel</h1>
    <p><a href="index.php">retour à l'accueil</a></p>
</body>
</html>