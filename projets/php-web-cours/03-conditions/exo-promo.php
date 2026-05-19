<?php
    $montantAchat = 516;
    $remise = 0.1;
    if($montantAchat > 100) {
        $montantAchat = $montantAchat * (1-$remise);
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>exo-promo</title>
</head>
<body>
    <p>Le montant à payer est de <?= $montantAchat ?> € </p>
</body>
</html>