<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    private $calculator;

    protected function setUp()
    {
        $this->calculator = new ExampleTest();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

}
