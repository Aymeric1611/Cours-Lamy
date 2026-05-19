<?php
$mdp = "secret123";
//calculer le hash de ce mdp
$hash = password_hash($mdp, PASSWORD_DEFAULT);//BCypt
echo $hash;
/*$hash = password_hash($mdp, PASSWORD_DEFAULT);
echo "\n";
echo $hash;
echo "\n";
$hash = password_hash($mdp, PASSWORD_ARGON2I);
echo $hash;
*/
//verifier un mdp
if(password_verify($mdp, $hash)){
    echo "Le mot de passe est valide";
} else {
    echo "Le mot de passe est invalide";
}