<?php
    $prenom = "Aymeric";
    $nom = "Joblin";
    $estConnecte = true;
    require __DIR__."/../lib/fonctions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
</head>

<body>
    <header>
        Mon super site
    <nav>
        <ul>
            <li><a href="cours.php">cours</a></li>
            <li><a href="contact.php">contacts</a></li>
        </ul>
    </nav>
    <?php if ($estConnecte) : ?>
    <?= getMessageConnexion($prenom,$nom) ?>
    <?php endif; ?>
    </header>    
