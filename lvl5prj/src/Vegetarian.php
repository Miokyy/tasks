<?php

namespace Mioky\Lvl5prj;

use Mioky\Lvl5\Pizza;

class Vegetarian extends Pizza
{
    public function __construct()
    {
        $this->name = "Вегетарианская";
        $this->sauce = "Томатный";
        $this->toppings = ["Болгарский перец", "Орегано", "Шампиньоны"];
    }
}
