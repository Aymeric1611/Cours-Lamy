<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles for</title>
</head>
<body>
    <h1>Boucles for</h1>
    <h2>Version classique</h2>
    <?php 
    for ($i=1; $i <= 5; $i++){ ?>
        <p>Tour n° <?= $i ?></p>
    <?php } ?>

    <!-- Génerationd'une liste à puces -->
    <ul>
    <?php 
    for ($i=1; $i <= 5; $i++){ ?>
        <li>Tour n° <?= $i ?></li>
    <?php } ?>
    </ul>

    <h2>version alternative</h2>
    <?php 
    for ($i=1; $i <= 5; $i++): ?>
        <p>Tour n° <?= $i ?></p>
    <?php endfor; ?>
</body>
</html>