<?php

namespace Pattern\FactoryMethod;

/**
 * Class PastaMaker
 * @package Pattern\FactoryMethod
 */
class PastaMaker extends Cook
{
    public function cook(): Dish
    {
        return new Pasta();
    }
}