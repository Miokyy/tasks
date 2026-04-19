<?php

require_once __DIR__ . '/vendor/autoload.php';

use Mioky\Lvl5prj\PizzaTown;

$pizzaStore = new PizzaTown();

$pizzaStore->orderPizza('FourCheese');
echo " " . PHP_EOL;
$pizzaStore->orderPizza('Pepperoni');
echo " " . PHP_EOL;
$pizzaStore->orderPizza('Vegetarian');