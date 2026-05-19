<?php
$nomDomaine = readline("saisir un nom de doamine : ");

$emails = [
    "Patrick" => "patrick@free.fr",
    "Bob" => "bob@gmail.com",
    "Gerome" => "gerome@laposte.net"
];

$trouver = false;
foreach ($emails as $email){
    $nomPlusDomaine = explode("@",$email);
    if ($nomDomaine == $nomPlusDomaine[1]){
        echo "- $nomPlusDomaine[0]\n";
        $trouver = true;
    }
}

if (!$trouver){
    echo "aucun membre trouver avec le nom de domaine $nomDomaine";
}
?>