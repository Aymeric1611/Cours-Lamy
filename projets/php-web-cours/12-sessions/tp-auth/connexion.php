<?php
session_start();

$utilisateurs = [
    [
        "login" => "alice@hu.com",
        "password" => "azerty",
        "prenom" => "Alice",
        "nom" => "Dupond"
    ],
    [
        "login" => "bob@hu.com",
        "password" => "azerty",
        "prenom" => "Bob",
        "nom" => "Dutunel"
    ]
] ;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $login = trim($_POST['login'] ?? '');
    $password = trim($_POST['password'] ?? '');
    //chercher dans tab si user existe
    
    $utilisateurTrouve = null;
    foreach ($utilisateurs as $utilisateur){
        if ($utilisateur['login'] === $login and $utilisateur['password'] === $password){
            $utilisateurTrouve = $utilisateur;
            break;
        }
    }
    
    if ($utilisateurTrouve !== null){
        $_SESSION['utilisateur'] = [
            "login" => $utilisateurTrouve['login'],
            "prenom" => $utilisateurTrouve['prenom'],
            "nom" => $utilisateurTrouve['nom']
        ];
        //rediger vers l'accueil
        header("Location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="connexion.php" method="post">
        <div>
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
        </div>
        <div>
            <label for="mdp">Mdp</label>
            <input type="password" id="mdp" name="password">
        </div>
        <button type="submit">Connexion</button>
    </form>
</body>

</html>