<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ReplicationBlock - Element Replication Rules
 * 
 * Defines which PNR element types should be carried over (replicated)
 * from old segments to new segments
 * 
 * /**
 * TicketingInfo - Ticketing-related options
 */
class TicketingInfo extends LoadParamsFromArray
{
    /**
     * Ticket number
     * 
     * @var string
     */
    public $ticketNumber;

    /**
     * Ticket type
     * 
     * @var string
     */
    public $ticketType;

    /**
     * Fare basis code
     * 
     * @var string
     */
    public $fareBasisCode;

    /**
     * Ticket designator
     * 
     * @var string
     */
    public $ticketDesignator;

    /**
     * Fare family information
     * 
     * @var FareFamily[]
     */
    public $fareFamilies = [];

    /**
     * Tour code
     * 
     * @var string
     */
    public $tourCode;

    /**
     * Upsell recommendation ID
     * 
     * @var int[]
     */
    public $upsellRecoIds = [];
}
