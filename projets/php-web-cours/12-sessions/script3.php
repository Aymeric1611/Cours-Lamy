<?php
session_start();
//supprimer le prenom de la session
unset($_SESSION['prenom']);
//supprimer toutes les données de la session
//ne supprime pas le fichier de session
$_SESSION = [];
//supprimer le fichier de session
session_destroy();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script 3</title>
</head>
<body>
    <h1>Script 3</h1>
    
</body>
</html>