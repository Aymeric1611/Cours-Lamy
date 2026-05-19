<?php
$phrase = readline("Saisir une phrase : ");
$mot = readline("Saisir un mot : ");
$motMin = strtolower($mot);
$phraseMin = strtolower($phrase);
$result = mb_substr_count($phraseMin, $motMin);
echo"le mot $mot apparait $result fois dans la phrase $phrase";
?>