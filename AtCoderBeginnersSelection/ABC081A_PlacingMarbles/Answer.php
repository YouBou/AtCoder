<?php

fscanf(STDIN, "%s", $a);

/** @var array $pockets */
$pockets = str_split($a);
$count = 0;

foreach($pockets as $pocket) {
    if ($pocket == 1) {
        $count++;
    }
}

echo "{$count}\n";