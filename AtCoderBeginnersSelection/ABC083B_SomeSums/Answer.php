<?php

fscanf(STDIN, "%d %d %d", $n, $a, $b);

$result = array();

for ($i = 0; $i <= $n; $i++) {
    // 数値を一桁ずつ文字列として配列に
    $array = str_split((string) $i);
    $total = 0;

    foreach ($array as $value) {
        // 一文字ずつに対するループ
        $total += (int) $value;
    }

    if ($a <= $total && $total <= $b) {
        // 各桁の合計値が$a以上$b以下の場合
        $result[] = $i;
    }
}
echo array_sum($result) . "\n";