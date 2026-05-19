<?php
$t = [10, 12.5, 14, 7, 15, 9.5, 8];
$noteMax = $t[0];
foreach ($t as $note){
    if ($noteMax < $note){
        $noteMax = $note;
    }
}
echo $noteMax
?>