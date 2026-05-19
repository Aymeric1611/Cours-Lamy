<?php
    $nomProduit = "Casque Sony";
    $categorieProduit = "Audio";
    $prixHT = 349.00;
    $tauxTVA = 0.20;
    $prixTTC = $prixHT * (1 + $tauxTVA);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-fiche</title>
</head>
<body>
    <h1>Afffichage des produits</h1>
    <h2><?= $nomProduit ?></h2>
    <p>Catégorie/Rayon : <?= $categorieProduit ?></p>
    <p>Prix TTC : <strong><?= $prixTTC ?> € </strong></p>

</body>
</html>