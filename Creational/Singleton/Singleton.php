<?php

namespace Pattern\Creational\Singleton;

final class Singleton
{
    /**
     * @var Singleton
     */
    protected static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }

        return self::$instance;
    }
}