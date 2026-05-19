<?php
    $age = 51;
    $statut = ($age >= 18) ? "Majeur":"Mineur" ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-Ternaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Version if...else</h2>
    <?php if ($age >= 18) : ?>
        <p>Statut : majeur</p>
    <?php else : ?>
        <p>Statut : mineur</p>
    <?php endif; ?>

    <h2>Version ternaire</h2>
    <p>Statut : <?= ($age >= 18) ? "Majeur" : "Mineur" ?></p>

    <h2>Version avec variable</h2>
    <p>Statut : <?= $statut ?> !</p>



<?php $estConnecte = false; ?>

<div class="badge <?= ($estConnecte) ? 'badge-success' : 'badge-danger' ?>">
  <?= ($estConnecte) ? "Connecté" : "Déconnecté" ?>
</div>

</body>
</html>