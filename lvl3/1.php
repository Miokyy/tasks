<?php

$x = 0;
$price = 0;

$cart = [
    ['name' => 'Phone', 'price' => 1000, 'quantity' => 2],
    ['name' => 'Case', 'price' => 50, 'quantity' => 1]
];

function calculateTotal(array $cart): float
{
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

$price = calculateTotal($cart);

echo "Общая стоимость товаром: $price";