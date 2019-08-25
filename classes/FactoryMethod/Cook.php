<?php

namespace Pattern\FactoryMethod;

/**
 * Class Cook
 * @package Pattern\FactoryMethod
 */
abstract class Cook
{
    /**
     * @return Dish
     */
    abstract protected function cook(): Dish;
}