<?php

$numbers = [1, 2, 3, 4, 5];
$a;
$b;
$a = $numbers[0];
$b = $numbers[count($numbers) - 1];
$numbers[count($numbers) - 1] = $a;
$numbers[0] = $b;

print_r($numbers);