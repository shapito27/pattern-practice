<?php
require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Pattern\FactoryMethod\PizzaMaker;
use Pattern\FactoryMethod\BurgerMaker;
use Pattern\FactoryMethod\PastaMaker;
use Pattern\FactoryMethod\Dish;

class FactoryMethodTest extends TestCase
{
    public function testCanCreatePizza()
    {
        //@todo
    }

    public function testCanCreateBurger()
    {
        //@todo
    }

    public function testCanCreatePasta()
    {
        //@todo
    }

    public function testPizzaMaker()
    {
        $maker = new PizzaMaker();
        $this->assertInstanceOf(Dish::class, $maker->cook(), 'dish from PizzaMaker doesnt implements Dish ');
    }

    public function testBurgerMaker()
    {
        $maker = new BurgerMaker();
        $this->assertInstanceOf(Dish::class, $maker->cook(), 'dish from BurgerMaker doesnt implements Dish ');
    }

    public function testPastaMaker()
    {
        $maker = new PastaMaker();
        $this->assertInstanceOf(Dish::class, $maker->cook(), 'dish from PastaMaker doesnt implements Dish ');
    }
}