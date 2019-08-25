<?php


namespace Pattern\FactoryMethod;

/**
 * Class BurgerMaker
 * @package Pattern\FactoryMethod
 */
class BurgerMaker extends Cook
{
    public function cook(): Dish
    {
        return new Burger();
    }
}