<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>

<body>
    <h1>Accueil du site</h1>
<!-- tester si l'utilisateur est co-->
    <?php if(isset($_SESSION['utilisateur'])): ?>
        <p>Bonjour <?= $_SESSION['utilisateur']['prenom'] ?></p>
        <p><a href="page-protegee.php">acces a votre espace protege</a></p>
        <p><a href="page-protegee2.php">acces a votre espace protege 2</a></p>
        <p><a href="deconnexion.php">Se deconnecter</a></p>
    <?php else: ?>
        <p>Vous n'etes pas connecté.</p>
        <p><a href="connexion.php">Se connecter</a></p>
    <?php endif; ?>
</body>

</html>