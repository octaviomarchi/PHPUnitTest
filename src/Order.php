<?php

/**
 * Order
 * 
 * An example order class
 */
class Order
{
    /**
     * Amount
     * @var int
     */
    public $amount = 0;

    /**
     * Payment gateway dependency
     * @var PaymentGateway
     */
    protected $gateway;

    /**
     * Contructor
     * 
     * @return void
     */
    public function __construct(PaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * Process the order
     * 
     * @return bool
     */
    public function process()
    {
        return $this->gateway->charge($this->amount);
    }
}
