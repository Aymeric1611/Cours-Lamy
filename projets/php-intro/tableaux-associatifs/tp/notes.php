<?php
$notes = [
    "Bouvot" => 18,
    "Bel" => 10,
    "Joblin" => 17,
    "Bulle" => 15,
    "Demenge" => 5
];
$notes ["Demenge"] = 6;
$notes ["Bouvot"] = $notes ["Bouvot"] - 1;
$notes ["Godfroy"] = 20;

foreach ($notes as $nom => $note){
    echo "$nom a eu $note\n";
}
?>