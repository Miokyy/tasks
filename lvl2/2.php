<?php

$a = 0;
$massiv = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
for ($i = 0; $i < count($massiv); $i++) {
    $a += $massiv[$i][$i];

}
echo "сумма главной диагонали - $a";