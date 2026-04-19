<?php

namespace Mioky\Lvl5prj;

use Mioky\Lvl5prj\FourCheese;
use Mioky\Lvl5prj\Pepperoni;
use Mioky\Lvl5prj\Vegetarian;
use Mioky\Lvl5\PizzaStore;
use Mioky\Lvl5\Pizza;

class PizzaTown extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        return match ($type) {
            'FourCheese' => new FourCheese(),
            'Vegetarian' => new Vegetarian(),
            'Pepperoni' => new Pepperoni(),
            default => throw new \Exception("Такой пиццы нет в меню"),
        };
    }
}
