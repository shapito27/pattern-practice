<?php


namespace Pattern\FactoryMethod;

/**
 * Class PizzaMaker
 * @package Pattern\FactoryMethod
 */
class PizzaMaker extends Cook
{
    public function cook(): Dish
    {
        return new Pizza();
    }
}