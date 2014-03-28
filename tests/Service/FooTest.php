<?php

use Exam\Service\Foo;

class FooTest extends PHPUnit_Framework_TestCase
{
    /** @var Foo */
    protected $instance;

    public function setup()
    {
        $this->instance = new Foo();
    }

    public function testDoSomething()
    {
        $this->assertEquals('Exam\Service\Foo::doSomething', $this->instance->doSomething());
    }
}
