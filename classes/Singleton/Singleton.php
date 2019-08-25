<?php

namespace Pattern\Singleton;

use RuntimeException;

/**
 * Class Singleton
 */
class Singleton
{
    /**
     * @var Singleton
     */
    private static $entity;

    /**
     * @var array
     */
    private $properties;

    /**
     * Closed Singleton constructor.
     */
    private function __construct()
    {
    }

    /**
     * Closed wakeup
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new RuntimeException("Cannot unserialize singleton");
    }

    /**
     * Closed clone
     */
    private function __clone()
    {
    }

    /**
     * @return Singleton
     */
    public static function createEntity(): Singleton
    {
        if (static::$entity === null) {
            static::$entity = new static();
        }

        return static::$entity;
    }

    /**
     * @param  string  $property
     * @param  string  $value
     */
    public function setProperty(string $property, string $value)
    {
        static::$entity->properties[$property] = $value;
    }

    /**
     * @param  string  $property
     * @return string
     */
    public function getProperty(string $property): string
    {
        return static::$entity->properties[$property];
    }
}