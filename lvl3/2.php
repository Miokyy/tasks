<?php

$a = 'Липа';
$b = 'Пила';
$anag;
function areAnagrams(string $a, string $b): bool
{

    $a = mb_strtolower($a);
    $b = mb_strtolower($b);

    $masA = str_split($a);
    $masB = str_split($b);
    if (count($masA) !== count($masB)) {
        return false;
    }

    sort($masA);
    sort($masB);

    if ($masA === $masB) {
        return true;
    } else {
        return false;
    }
}
$anag = areAnagrams($a, $b);
if ($anag) {
    $anag = 'анаграмма';
} else {
    $anag = 'не анаграмма';
}
echo "$a и $b - $anag";
