<?php
function lireCodeUtilisateur(string $message):string{
    $motDePasse = readline("$message");
    $reponse = false;
    while ($reponse == false){
        if (strlen($motDePasse) == 5){
            for ($i = 0 ; $i < 3; $i++){
                if ((ord($motDePasse[$i]) < ord("A") or  ord($motDePasse[$i]) > ord("Z")) and ord(" ") == ord($motDePasse[$i])){
                    $reponse = false;
                } else {
                    for ($i = 2; $i < 6;$i++){
                        if ((ord($motDePasse[$i]) < ord("0") or  ord($motDePasse[$i]) > ord("9")) and ord(" ") == ord($motDePasse[$i])){
                            $reponse = false;
                        } else {
                            $reponse = true;
                        }
                    }
                }
            }
        }else {
            echo "erreur : format invalide";
        }
    }
}
$code = lireCodeUtilisateur("Saisir un code utilisateur (AAA99) : ");
echo "Code valide : $code\n";
?>