<?php

$tmp = [];
while ($line = fgets(STDIN)) {
    // 標準入力を一行ずつ配列に代入
    $tmp[] = trim($line);
}

// 標準入力から受け取ったstringをintにキャスト
array_map(function ($value) {
    return (int) $value;
}, $tmp);
array_shift($tmp);

$stock = [];

$loopCount = count($tmp);

for ($i = 0; $i < $loopCount; $i++) {
    if ($i === 0) {
        // 初回ループ処理
        foreach ($tmp as $index => $value) {
            if ($value === max($tmp)) {
                $stock[] = $value;
                array_splice($tmp, $index, 1);
                break;
            }
        }
        continue;
    }

    if (min($stock) >= max($tmp)) {
        if (min($stock) === max($tmp)) {
            foreach ($tmp as $index => $value) {
                if ($value === max($tmp)) {
                    array_splice($tmp, $index, 1);
                    break;
                }
            }
            continue;
        }
        // 2回目ループ以降
        foreach ($tmp as $index => $value) {
            if ($value === max($tmp)) {
                $stock[] = $value;
                array_splice($tmp, $index, 1);
                break;
            }
        }
    }
}

echo count($stock);
