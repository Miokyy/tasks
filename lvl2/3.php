<?php

$a;
$b = 1;
$c = 0;
$d = 0;
$e;
$ravenstvo = false;
$massiv =[1, 1, 2, 2, 2, 3, 3];
$mas = [
    [],
    [],
    []
];
for ($i = 1; $i < count($massiv);$i++) {
    if($massiv[$i] == $massiv[$i-1]){
    $b++;
    $a = $massiv[$i-1];
    $mas[$d][0] = $b;
    $mas[$d][1] = $a;
    }
    else{
        $a = $massiv[$i];
        $b = 1;
        $d++;
    }
}
$b = $mas[0][0];
for ($e = 1; $e < count($mas); $e++){
        if ($b == $mas[$e][0]){
            $ravenstvo = true;
        }
        else {
            $ravenstvo = false;
            break;
        }
}
$b = $mas[0][0];
$a = $mas[0][1];
if($ravenstvo == false){
    for ($e = 1; $e < count($mas); $e++){
        if($b < $mas[$e][0]){
            $a = $mas[$e][1];
            $b = $mas[$e][0];
        }
    }
    echo "Самая длинная последовательность одинаковых чисел подряд - $a в количестве $b";
}
else{
    echo "Самая длинная последовательность одинаковых чисел подряд не найдена, так как все полследовательности равны";
}
