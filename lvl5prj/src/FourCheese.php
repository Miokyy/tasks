<?php

namespace Mioky\Lvl5prj;

use Mioky\Lvl5\Pizza;

class FourCheese extends Pizza
{
    public function __construct()
    {
        $this->name = "Четыре сыра";
        $this->sauce = "Сливочный";
        $this->toppings = ["Свежий базилик", "Орегано"];
    }
}
