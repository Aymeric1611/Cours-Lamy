<?php
for ($nombre = 1; $nombre <= 30; $nombre ++){
    if ($nombre % 3 == 0 and $nombre % 5 == 0){
        echo "FizzBuzz ";
    } elseif ($nombre % 3 == 0){
        echo "fizz ";
    } elseif ($nombre % 5 == 0){
        echo "buzz ";
    } else {
        echo $nombre." ";
    }
}

?>