<?php

fscanf(STDIN, "%s", $a);
$n = trim(fgets(STDIN));

$pieces = explode(" ", $n);
$count = 0;
$singleCount = 0;
$array = array();

foreach ($pieces as $piece) {
    while (true) {
        if ($piece % 2 == 0) {
            $piece /= 2;
            $singleCount++;
            continue;
        }
        break;
    }
    $array[] = $singleCount;
    $singleCount = 0;
}
echo min($array) . "\n";