<?php
session_start();
//supprimer dans la session les infos lier a la connexion de l'utilisateur => la clé 'utilisateur' dans $_SESSION
unset($_SESSION['utilisateur']);

// ou 
//$_SESSION = [];
//session_destroy(); //detruit le fichier de session sur le serveur
//faut suppprimer le cookie de session sur le navigateur

header("Location: index.php");
exit;
?>