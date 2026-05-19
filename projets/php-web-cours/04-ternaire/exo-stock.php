<?php
    $qte = 10;
    $estCritique = ($qte < 5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-stock</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Quantité : <?= $qte ?></p>
    (<?php if ($estCritique) : ?>
        <span class="critique">stock critique</span>
    <?php else : ?>
        <span class="suffisant">stock suffisant</span>
    <?php endif; ?>)
</body>
</html>