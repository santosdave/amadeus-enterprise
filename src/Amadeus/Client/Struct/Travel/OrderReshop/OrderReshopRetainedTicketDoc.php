<?php

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReuseTicket;

class OrderReshopRetainedTicketDoc
{
    /**
     * Ticket Number
     * 
     * @var string
     */
    public $TicketNumber;

    /**
     * Passenger ID
     * 
     * @var string
     */
    public $PaxID;

    /**
     * Document Type
     * 
     * @var string
     */
    public $Type;

    /**
     * OrderReshopRetainedTicketDoc constructor
     *
     * @param ReuseTicket $reuseTicket
     */
    public function __construct(ReuseTicket $reuseTicket)
    {
        $this->TicketNumber = $reuseTicket->ticketNumber;
        $this->PaxID = $reuseTicket->paxID;
        $this->Type = $reuseTicket->type;
    }
}
