<?php

$income = 40000;
$nalog;

if ($income < 20000) {
    $nalog = ($income * 10) / 100;
    echo "Налог = 10%" . PHP_EOL;
    echo "Налог = $nalog";
} elseif ($income >= 20000 and $income <= 50000) {
    $nalog = ($income * 15) / 100;
    echo "Налог = 2000 + 15% от суммы свыше 20000" . PHP_EOL;
    $nalog += 2000;
    echo "Налог = $nalog";
} elseif ($income > 50000) {
    $nalog = ($income * 20) / 100;
    echo "Налог = 6500 + 20% от суммы свыше 50000" . PHP_EOL;
    $nalog += 6500;
    echo "Налог = $nalog";
}