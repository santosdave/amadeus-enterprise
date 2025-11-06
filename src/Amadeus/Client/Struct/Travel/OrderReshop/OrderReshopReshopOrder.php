<?php

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\TravelOrderReshopOptions;

class OrderReshopReshopOrder
{
    /**
     * Service Order
     * 
     * @var OrderReshopServiceOrder
     */
    public $ServiceOrder;

    /**
     * OrderReshopReshopOrder constructor
     *
     * @param TravelOrderReshopOptions $options
     */
    public function __construct(TravelOrderReshopOptions $options)
    {
        $this->ServiceOrder = new OrderReshopServiceOrder($options);
    }
}
