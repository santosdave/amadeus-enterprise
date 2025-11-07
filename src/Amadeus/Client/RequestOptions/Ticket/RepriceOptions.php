<?php

/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Ticket;

use Amadeus\Client\LoadParamsFromArray;


/**
 * RepriceOptions - Reprice-Specific Options
 */
class RepriceOptions extends LoadParamsFromArray
{


    /**
     * Residual value handling
     * 
     * @var string[]
     */
    public $residualValue = [];

    /**
     * Check-in coupon indicator
     * 
     * @var bool
     */
    public $checkinCoupon;

    /**
     * Operation type
     * 
     * @var string
     */
    public $operation;
}