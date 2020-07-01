<?php
declare(strict_types=1);

namespace Pattern\Creational\Singleton\Tests;

use Pattern\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testSingletonClass()
    {
        $singleton = Singleton::getInstance();
        $singletonSecond = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $singletonSecond);
        $this->assertSame($singleton, $singletonSecond);
    }
}