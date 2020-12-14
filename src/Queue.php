<?php

/**
 * Queue
 * 
 * A first-in, first-out data structure
 */
class Queue
{

    /**
     * Maximum number of items in the queue
     * @var int
     */
    public const MAX_ITEMS = 5;

    /**
     * Queue items
     * @var array
     */
    protected $items = [];

    /**
     * Add an item to the end of the queue
     * 
     * @param mixed 
     */
    public function push($item)
    {
        if ($this->getCount() == static::MAX_ITEMS) {
            throw new QueueException("Queue is full");
        }

        $this->items[] = $item;
    }

    /**
     * Take an item off the head off yhe queue
     * 
     * @return mixed The item
     */
    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * Get the total number of items in the queue
     * 
     * @return int The number of items
     */
    public function getCount()
    {
        return count($this->items);
    }

    /**
     * Remove all the items from the queue
     * 
     * @return void
     */
    public function clear()
    {
        $this->items = [];
    }
}
