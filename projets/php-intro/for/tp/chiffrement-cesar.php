<?php
$mdp = readline("saisir un mot de passe : ");
$decalage = readline("saisir un nombre pour le decalage : ");
$result = "";

for ($nombre = 0; $nombre <= strlen($mdp); $nombre ++){

    $codeAscii = ord(substr($mdp,$nombre,1));

    if ((ord("a") <= $codeAscii and $codeAscii <= ord("z")) or (ord("a") <= $codeAscii and $codeAscii <= ord("Z"))) {
        
        if (ord("a") <= $codeAscii and $codeAscii <= ord("z")) {

            if ($codeAscii +  $decalage <= ord("z")) {

                $result = $result.chr($codeAscii + $decalage);

            } else {

                $result = $result.chr($codeAscii - 26 + $decalage);
            }
        } elseif ((ord("A") <= $codeAscii and $codeAscii <= ord("Z"))) {

            if ($codeAscii +  $decalage <= ord("Z")){

                $result = $result.chr($codeAscii + $decalage);

            } else {
                $result = $result.chr($codeAscii - 26 + $decalage);
            }
        }

    } else {
       $result = $result.substr($mdp,$nombre,1);
    }
}

echo $result;
?>