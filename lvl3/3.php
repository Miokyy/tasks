<?php
$arr = [
    ['name' => 'Phone', 'price' => 1000],
    ['name' => 'Case', 'price' => 50]
];
function flipArray(array $arr): array
{
    $rra = [];
    foreach ($arr as $item) {
        $rra[] = array_flip($item);
    }
    return $rra;
}
$arr = flipArray($arr);
print_r($arr);