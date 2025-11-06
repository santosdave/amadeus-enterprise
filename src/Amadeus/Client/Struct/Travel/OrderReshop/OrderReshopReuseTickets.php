<?php

// OrderReshopReuseTickets.php
namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReuseTicket;

class OrderReshopReuseTickets
{
    /**
     * Retained Ticket Documents
     * 
     * @var OrderReshopRetainedTicketDoc[]
     */
    public $RetainedTicketDoc = [];

    /**
     * OrderReshopReuseTickets constructor
     *
     * @param ReuseTicket[] $reuseTickets
     */
    public function __construct(array $reuseTickets)
    {
        foreach ($reuseTickets as $reuseTicket) {
            $this->RetainedTicketDoc[] = new OrderReshopRetainedTicketDoc($reuseTicket);
        }
    }
}
