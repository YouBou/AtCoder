<?php

fscanf(STDIN, "%d %d", $a, $b);

$multi = $a * $b;

if ($multi % 2 === 0) {
    echo "Even\n";
    exit;
}

echo "Odd\n";