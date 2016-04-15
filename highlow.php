<?php

$num = mt_rand(1, 100);

echo "Guess a random number between 1 and 100!\n";

do {
    $response = trim(fgets(STDIN));
    echo "$response\n";
    if ($response > $num){
        echo "LOWER\n";
    } elseif ($response < $num) {
        echo "HIGHER\n";
    } elseif ($response == $num){
        echo "GOOD GUESS!\n";
    }
} while ($response !== $num);

