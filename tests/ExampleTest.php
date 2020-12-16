<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;
use PHPUnit\Framework\TestCase;

class ExampleTest extends MockeryTestCase
{
    public function testAddingTwoPlusTwoResultsFour()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
