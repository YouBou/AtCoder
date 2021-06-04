<?php

const TOP_VALUE = 500;
const MIDDLE_VALUE = 100;
const BOTTOM_VALUE = 50;

fscanf(STDIN, "%d", $a);
fscanf(STDIN, "%d", $b);
fscanf(STDIN, "%d", $c);
fscanf(STDIN, "%d", $x);

$count = 0;

for ($ai = 0; $ai <= $a; $ai++) {
    for ($bi = 0; $bi <= $b; $bi++) {
        for ($ci = 0; $ci <= $c; $ci++) {
            $sum = TOP_VALUE * $ai + MIDDLE_VALUE * $bi + BOTTOM_VALUE * $ci;
            if ($sum === $x) {
                $count++;
            }
        }
    }
}

echo $count . "\n";