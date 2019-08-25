<?php
require_once __DIR__.'/../vendor/autoload.php';

use Pattern\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testCreateEntity()
    {
        $entity = Singleton::createEntity();
        $this->assertInstanceOf(Singleton::class, $entity, 'Singleton::createEntity() return wrong object!');
    }

    public function testSingleton()
    {
        //create first object
        $entity1 = Singleton::createEntity();
        $entity1->setProperty('height', '2000');

        //create second object. Singletone have to return $entity1
        $entity2 = Singleton::createEntity();
        $entity2->setProperty('height', '30');

        $this->assertSame($entity1, $entity2, 'Objects are not same! Singletone return not same object.');
    }

    public function testSingletonLogicWorks()
    {
        $value = '150';
        $entity = Singleton::createEntity();
        $entity->setProperty('width', $value);

        $this->assertEquals($value, $entity->getProperty('width'), 'Singleton set/get property work wrong');
    }
}
