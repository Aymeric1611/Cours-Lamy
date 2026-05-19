<?php
    $prenom = "Aymeric";
    $nom = "Joblin";
    $age = 19;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo-profil.php</title>
</head>
<body>
    <p><?= "Bonjour $prenom $nom, vous avez $age ans." ?></p>
    <p>Bonjour <?= "$prenom $nom" ?>, vous avez <?= $age ?> ans. </p>
</body>
</html>