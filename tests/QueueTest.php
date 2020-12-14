<?php

use PHPUnit\Framework\TestCase;

class QueueTests extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue;

        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue;

        $queue->push('green');

        $this->assertEquals(1, $queue->getCount());
    }

    public function testAnItemIsRemovedFromTheQueu()
    {
        $queue = new Queue;

        $queue->push('green');

        $item = $queue->pop();

        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('green', $item);
    }
}
