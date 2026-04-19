<?php

namespace Mioky\Lvl5prj;

use Mioky\Lvl5\Pizza;

class Pepperoni extends Pizza
{
    public function __construct()
    {
        $this->name = "Пепперони";
        $this->sauce = "Томатный";
        $this->toppings = ["Пепперони"];
    }
}
