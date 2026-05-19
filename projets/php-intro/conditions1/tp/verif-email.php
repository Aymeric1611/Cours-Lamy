<?php
$mail = readline("saisir une adresse email : ");
if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
    echo "l'adresse $mail est valide";
} else {
    echo "l'adresse $mail est invalide";
}
?>