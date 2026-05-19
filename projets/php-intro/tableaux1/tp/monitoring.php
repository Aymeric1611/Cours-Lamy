<?php
// =============================================
// DONNÉES BRUTES (LOGS DU 01/12/2023)
// =============================================

// Liste des codes HTTP renvoyés par le serveur
$httpCodes = [200, 200, 500, 200, 200,404, 200, 500, 500, 200,200, 200, 404, 200, 200];

// Liste des temps de réponse correspondants (en ms)
// L'index 0 de $responseTimes correspond à l'index 0 de $httpCodes, etc.
$reponseTimes = [120, 45, 1500, 600, 120,40, 2500, 300, 800, 95,110, 450, 20, 3500, 150];

echo count($httpCodes)." requêtes analusées\n";

for ($i = 0; $i < count($httpCodes); $i++){
    echo "Requête [" . $i+1 . "] : Code $httpCodes[$i] | Temps : $reponseTimes[$i] ms\n";
}

$timeMax = max($reponseTimes);
$indice = 0;
for ($i = 0; $i <count($reponseTimes); $i++){
    if ($timeMax == $reponseTimes[$i]){
        $indice = $i;
    }
}
echo "La requête la plus lente a mis $timeMax ms.\n
Elle correspond à l'index $indice.\n
Son code HTTP était : ". $httpCodes[$indice]."\n";

$nbErreur = 0;
foreach ($httpCodes as $code){
    if ($code == 500){
        $nbErreur++;
    }
}

$sommeValide = 0;
$compteurValide = 0;
for ($i = 0; $i < count($reponseTimes); $i++){
    if ($httpCodes[$i] == 200){
        $sommeValide += $reponseTimes[$i];
        $compteurValide ++;
    }
}
$moyenne = $sommeValide/$compteurValide;

for ($i = 0; $i < count($reponseTimes); $i++){
    if ($httpCodes[$i] == 200 and $reponseTimes[$i] > 500){
        echo "ALERTE : La requête $i est valide mais trop lente ". $reponseTimes[$i]." ms !\n";
    }
}
?>