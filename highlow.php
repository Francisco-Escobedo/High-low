<?php

$low = $argv[1];
$high = $argv[2];

if (is_numeric($low) == true && is_numeric($high)){
    if ($low < $high){

        $num = mt_rand($low, $high);

        echo "Guess a random number between $low and $high\n";

        do {
            $response = trim(fgets(STDIN));
            if ($response > $num){
                echo "LOWER\n";
            } elseif ($response < $num) {
                echo "HIGHER\n";
            } elseif ($response == $num){
                echo "GOOD GUESS!\n";
                echo "To exit game, press Control + C\n";
                echo "See you next time!\n";
            }

        } while ($response !== $num);

    } else {
        echo "Please ensure the first value is MINIMUM while second value is MAXIMUM\n";
    }
} else { 
    echo "Arguments must be numeric and in order of lowest possible random number followed by highest possible random number.\n";
}
