<?php

fscanf(STDIN, "%d", $n);
$a = trim(fgets(STDIN));
$cards = explode(" ", $a);

$alicePicks = [];
$bobPicks = [];

// stringで受け取った入力を数値に変換
array_map(function ($card) {
    return (int) $card;
}, $cards);

for ($i = 1; $i <= $n; $i++) {
    $max = max($cards);
    if ($i % 2 === 0) {
        //偶数ターンの場合
        foreach ($cards as $index => $card) {
            if ($card === $max) {
                // 最大値の場合、一度のみ処理
                $bobPicks[] = $card;
                array_splice($cards, $index, 1);
                break;
            }
        }
        continue;
    }

    // 奇数ターンの場合
    foreach ($cards as $index => $card) {
        if ($card === $max) {
            // 最大値の場合、一度のみ処理
            $alicePicks[] = $card;
            array_splice($cards, $index, 1);
            break;
        }
    }
}
echo array_sum($alicePicks) - array_sum($bobPicks);
