<?php
$nbCopie = readline("saisir le nombre de copie : ");
$prix = 0;
if ($nbCopie <= 10){
    $prix = $nbCopie * 0.3;
} elseif ($nbCopie <=30){
    $prix = (10 * 0.3) + (($nbCopie - 10) * 0.25);
} else {
    $prix = (10 * 0.3) + (20 * 0.25) + (($nbCopie - 30)* 0.2);
}
if ($prix > 50){
    $prix = $prix * 0.9;
    //echo "il y a eu une reduc de 10%\n";
}
echo "le prix total des copies est de $prix €";
?>