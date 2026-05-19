<?php
    function direBonjour(): string{
        //on evite le echo dans les fonctions
        return "Bonjour à tous";
    }

    function saluerUtilisateur(string $prenom) : string{
        return "Salut $prenom";
    }
    $prenom = "Aymeric";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
    <h1>Les fonctions</h1>
    <h2>Dire bonjour</h2>
    <p><?=  direBonjour() ?></p>
    <h2>Saluer utilisateur</h2>
    <p><?= saluerUtilisateur($prenom) ?></p>
</body>
</html>